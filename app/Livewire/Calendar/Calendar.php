<?php

namespace App\Livewire\Calendar;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Date;
use Livewire\Attributes\On;
use Livewire\Component;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

class Calendar extends Component
{
    public Carbon $currentDate;
    public CalendarViewTypes $viewType = CalendarViewTypes::Month;
    public bool $isViewTypeMenuOpen = false;

    public function mount()
    {
        $this->currentDate = Carbon::now();
    }

    public function goToPreviousMonth(): void
    {
        $this->currentDate = $this->currentDate->subMonth();
    }

    public function goToNextMonth(): void
    {
        $this->currentDate = $this->currentDate->addMonth();
    }

    public function setViewType(CalendarViewTypes $viewType): void {
        $this->viewType = $viewType;
    }

    public function goToToday(): void
    {
        $this->currentDate = Date::now();
    }

    public function toggleViewTypeMenu(): void {
        $this->isViewTypeMenuOpen = !$this->isViewTypeMenuOpen;
    }

    #[On('closeViewTypeMenu')]
    public function closeViewTypeMenu() {
        $this->isViewTypeMenuOpen = false;
    }

    public function viewTypeClickHandler(CalendarViewTypes $viewType): void {
        $this->setViewType($viewType);
        $this->isViewTypeMenuOpen = false;
    }

    public function render()
    {
        return view('livewire.calendar.calendar');
    }
}
