<?php

namespace App\Livewire\Services;

use Illuminate\Support\Facades\URL;
use Livewire\Component;

class EditServiceForm extends Component
{
    public array $state;
    public function goBack() {
        $this->redirect(URL::route('settings.services'));
    }

    public function render()
    {

        return view('livewire.services.edit-service-form');
    }
}
