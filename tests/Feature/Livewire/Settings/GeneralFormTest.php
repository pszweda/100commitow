<?php

use App\Livewire\Settings\GeneralForm;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(GeneralForm::class)
        ->assertStatus(200);
});
