<?php

use App\Livewire\Calendar\MonthCalendar;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(MonthCalendar::class)
        ->assertStatus(200);
});
