<?php

use App\Livewire\Settings\ServicesForm;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(ServicesForm::class)
        ->assertStatus(200);
});
