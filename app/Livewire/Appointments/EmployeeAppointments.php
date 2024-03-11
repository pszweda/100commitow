<?php

namespace App\Livewire\Appointments;

use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Url;
use Livewire\Component;

class EmployeeAppointments extends Component
{
    public array $employees = [];

    public array $appointments = [];

    public array $clients = [];

    public Carbon|null $selectedDate = null;

    #[Url]
    public string $selectedEmployee = '';

    public function mount()
    {
        $this->employees = [
            ['name' => 'John Doe'],
            ['name' => 'Jane Doe'],
            ['name' => 'Joe Doe'],
            ['name' => 'Jill Doe'],
            ['name' => 'Jim Doe'],
            ['name' => 'Mark Smith'],
            ['name' => 'Jane Smith'],
            ['name' => 'Joe Smith'],
        ];

        $this->clients = [
            ['name' => 'Arnold Smith'],
            ['name' => 'Mark Smith'],
            ['name' => 'Jane Smith'],
            ['name' => 'Joe Doe'],
            ['name' => 'Jill Doe'],
            ['name' => 'Jim Doe'],
        ];

        $this->selectedDate = Date::now();
    }

    public function goToPreviousMonth()
    {
        $this->selectedDate = $this->selectedDate->subMonth();
    }

    public function goToNextMonth()
    {
        $this->selectedDate = $this->selectedDate->addMonth();
    }

    public function goToToday()
    {
        $this->selectedDate = Date::now();
    }

    public function getDateNameFromDay(int $day): Carbon
    {
        return Date::createFromDate(
            $this->selectedDate->year,
            $this->selectedDate->month,
            $day
        );
    }

    #[Computed]
    public function daysInCurrentMonth(): int {
        return $this->selectedDate->daysInMonth;
    }

    public function render()
    {
        return view('livewire.appointments.employee-appointments');
    }
}
