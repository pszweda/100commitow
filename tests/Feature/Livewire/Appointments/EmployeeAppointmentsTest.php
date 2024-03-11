<?php

use App\Livewire\Appointments\EmployeeAppointments;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(EmployeeAppointments::class)
        ->assertStatus(200);
});
