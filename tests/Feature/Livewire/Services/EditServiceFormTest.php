<?php

use App\Livewire\Services\EditServiceForm;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(EditServiceForm::class)
        ->assertStatus(200);
});
