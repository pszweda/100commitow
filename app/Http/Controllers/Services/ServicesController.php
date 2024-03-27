<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class ServicesController extends Controller
{
    public function __construct(
        private \App\Models\Services\Service $service
    ) {
    }

    public function index() {
        return view('settings.index');
    }

    public function edit(Request $request, string $service) {
        $service = $this->service->getById(Uuid::fromString($service));

        if (!$service) {
            abort(404);
        }

        return view('settings.pages.services.edit', [
            'service' => $service
        ]);
    }

    public function create(Request $request) {
        return view('settings.pages.services.create');
    }

    public function update(Request $request, string $service) {
        if(!$request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'nullable'
        ])) {
            session()->flash('error', 'Could not update service.');
            return redirect()->back();
        }

        $service = $this->service->getById(Uuid::fromString($service));
    }
}
