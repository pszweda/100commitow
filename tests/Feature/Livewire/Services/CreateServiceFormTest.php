<?php

use App\Livewire\Services\CreateServiceForm;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(CreateServiceForm::class)
        ->assertStatus(200);
});
