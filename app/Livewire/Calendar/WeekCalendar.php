<?php

namespace App\Livewire\Calendar;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class WeekCalendar extends Component
{
    public $currentDate;

    public Collection $appointments;

    public function mount() {
        $this->appointments = collect();
    }

    public function createAppointment(string $datetime): void {
        $this->appointments->push(Carbon::createFromTimeString($datetime));
    }

    public function render()
    {
        return view('livewire.calendar.week-calendar');
    }
}
