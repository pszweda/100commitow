<?php

namespace App\Livewire\Settings;

use App\Domain\Services\Service;
use Livewire\Attributes\On;
use Livewire\Component;

class ServicesForm extends Component
{
    public function render()
    {
        return view('livewire.settings.services-form');
    }

    #[On('save')]
    public function save() {
        dd('test');
    }
}
