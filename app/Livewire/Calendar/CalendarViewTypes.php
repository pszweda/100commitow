<?php

namespace App\Livewire\Calendar;

enum CalendarViewTypes: string
{
    case Day = 'day';
    case Week = 'week';
    case Month = 'month';
}
