<?php

namespace App\Livewire\Calendar;

use Carbon\CarbonImmutable;
use Illuminate\Support\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Component;

class MonthCalendar extends Component
{
    public Carbon $currentDate;

    public CarbonImmutable $firstDayOfCalendar;

    public function mount() {
        $firstWeekDayOfMonth = $this->currentDate->startOfMonth()->dayOfWeek;
        $this->firstDayOfCalendar = $this->currentDate->startOfMonth()->subDays($firstWeekDayOfMonth - 1)
            ->toImmutable();
    }

    public function render()
    {
        return view('livewire.calendar.month-calendar');
    }
}
