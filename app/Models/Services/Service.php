<?php
declare(strict_types=1);

namespace App\Models\Services;

use App\Models\Services\Base\ServiceModel;
use Illuminate\Support\Collection;
use Ramsey\Uuid\Uuid;

class Service implements \App\Domain\Services\Services {

    public function __construct(
        public readonly ServiceModel $model,
    ) {
    }

    public function create(\App\Domain\Services\Service $service): void {
        $this->model::factory()->create($service->toArray());
    }

    public function getAll(): Collection {
        return $this->model::all();
    }

    public function getActive(): Collection {
        return $this->model::where('active', true)->get();
    }

    public function getInactive(): Collection {
        return $this->model::where('active', false)->get();
    }

    public function getByName(string $name): ?\App\Domain\Services\Service {
        return \App\Domain\Services\Service::fromArray($this->model::where('name', $name)->first()->toArray());
    }

    public function getById(Uuid $id): ?\App\Domain\Services\Service {
        return \App\Domain\Services\Service::fromArray($this->model::where('id', $id)->first()->toArray());
    }
}
