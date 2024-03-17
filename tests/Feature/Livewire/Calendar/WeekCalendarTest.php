<?php

use App\Livewire\Calendar\WeekCalendar;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(WeekCalendar::class)
        ->assertStatus(200);
});
