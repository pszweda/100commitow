<?php

use App\Livewire\Calendar\Calendar;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Calendar::class)
        ->assertStatus(200);
});
