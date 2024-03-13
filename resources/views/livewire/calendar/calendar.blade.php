<div>
    <div class="lg:flex lg:h-full lg:flex-col">
        <header class="flex items-center justify-between border-b border-gray-200 px-6 pb-4 lg:flex-none">
            <h1 class="text-base font-semibold leading-6 text-gray-900">
                <time datetime="{{ $currentDate->format('Y-m-d') }}">{{ $currentDate->format('F Y') }}</time>
            </h1>
            <div class="flex items-center">
                <div class="relative flex items-center rounded-md bg-white shadow-sm md:items-stretch">
                    <button
                        wire:click="goToPreviousMonth"
                        type="button"
                        class="flex h-9 w-12 items-center justify-center rounded-l-md border-y border-l border-gray-300 pr-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pr-0 md:hover:bg-gray-50"
                    >
                        <span class="sr-only">{{ __('Previous month') }}</span>
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                    <button
                        wire:click="goToToday"
                        @if($currentDate->isToday()) disabled="true" @endif
                        type="button"
                        class="hidden border-y border-gray-300 px-3.5 text-sm font-semibold text-gray-900 hover:bg-gray-50 focus:relative md:block disabled:text-gray-400"
                    >{{ __('Today') }}
                    </button>
                    <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
                    <button
                        wire:click="goToNextMonth"
                        type="button"
                        class="flex h-9 w-12 items-center justify-center rounded-r-md border-y border-r border-gray-300 pl-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pl-0 md:hover:bg-gray-50"
                    >
                        <span class="sr-only">{{ __('Next month') }}</span>
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </div>
                <div class="hidden md:ml-4 md:flex md:items-center">
                    <div class="relative">
                        <button
                            type="button"
                            class="flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                            id="menu-button"
                            aria-expanded="false"
                            aria-haspopup="true"
                            wire:click="toggleViewTypeMenu"
                            @click.outside="Livewire.dispatch('closeViewTypeMenu')"
                        >
                            {{ __(':viewType view', ['viewType' => ucfirst($viewType->value)]) }}
                            <svg
                                class="-mr-1 h-5 w-5 text-gray-400"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>

                        <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div
                            class="{{ !$isViewTypeMenuOpen ? 'hidden' : '' }} absolute right-0 z-10 mt-3 w-36 origin-top-right overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none cursor-pointer"
                            role="menu"
                            aria-orientation="vertical"
                            aria-labelledby="menu-button"
                            tabindex="-1"
                        >
                            <div
                                class="py-1"
                                role="none"
                            >
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                @foreach(\App\Livewire\Calendar\CalendarViewTypes::cases() as $type)
                                    <a
                                        wire:click="viewTypeClickHandler('{{ $type }}');"
                                        class="text-gray-700 block px-4 py-2 text-sm  hover:bg-gray-200 hover:font-bold"
                                        role="menuitem"
                                        tabindex="-1"
                                        id="menu-item-0"
                                    >{{ __(':viewType view', ['viewType' => ucfirst($type->value)]) }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative ml-6 md:hidden">
                    <button
                        wire:click="toggleViewTypeMenu"
                        type="button"
                        class="-mx-2 flex items-center rounded-full border border-transparent p-2 text-gray-400 hover:text-gray-500"
                        id="menu-0-button"
                        aria-expanded="false"
                        aria-haspopup="true"
                    >
                        <span class="sr-only">{{ __('Open menu') }}</span>
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                        </svg>
                    </button>
                    <div
                        class="{{ !$isViewTypeMenuOpen ? 'hidden' : '' }} absolute right-0 z-10 mt-3 w-36 origin-top-right divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="menu-0-button"
                        tabindex="-1"
                    >
                        @if(!$currentDate->isToday())
                            <div
                                class="py-1"
                                role="none"
                            >
                                <a
                                    wire:click="goToToday"
                                    class="text-gray-700 block px-4 py-2 text-sm"
                                    role="menuitem"
                                    tabindex="-1"
                                >{{ __('Go to today') }}</a>
                            </div>
                        @endif
                        <div
                            class="py-1"
                            role="none"
                        >
                            @foreach(\App\Livewire\Calendar\CalendarViewTypes::cases() as $type)
                                <a
                                    wire:click="viewTypeClickHandler('{{ $type }}');"
                                    class="text-gray-700 block px-4 py-2 text-sm"
                                    role="menuitem"
                                    tabindex="-1"
                                >{{ __(':viewType view', ['viewType' => ucfirst($type->value)]) }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @switch($viewType)
            @case(\App\Livewire\Calendar\CalendarViewTypes::Day)
                @livewire('calendar.day', [
                    'currentDate' => $currentDate
                ])
            @break
            @case(\App\Livewire\Calendar\CalendarViewTypes::Week)
                @livewire('calendar.week', [
                    'currentDate' => $currentDate
                ])
            @break
            @case(\App\Livewire\Calendar\CalendarViewTypes::Month)
                @livewire('calendar.month-calendar', [
                    'currentDate' => $currentDate
                ])
            @break
        @endswitch
    </div>
</div>
