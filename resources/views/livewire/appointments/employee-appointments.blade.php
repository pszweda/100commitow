<div>
    <div class="flex justify-between mb-4">
        <div class="flex items-center gap-2">
            <select
                class="w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                wire:model.live.debounce.300ms="selectedEmployee"
            >
                <option value="">{{ __('Select Therapist') }}</option>
                @foreach($employees as $employee)
                    <option value="{{ $employee['name'] }}">{{ $employee['name'] }}</option>
                @endforeach
            </select>
            <span wire:loading><x-bladewind.spinner></x-bladewind.spinner></span>
        </div>
        <div class="flex items-center gap-2">
            <div
                class="flex align-middle justify-center min-w-[150px] text-center"
            >
                {{ $selectedDate->format('F Y') }}
            </div>
            <div class="relative flex items-center rounded-md bg-white shadow-sm md:items-stretch">
                <button
                    wire:click="goToPreviousMonth"
                    type="button"
                    class="flex h-9 w-12 items-center justify-center rounded-l-md border-y border-l border-gray-300 pr-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pr-0 md:hover:bg-gray-50"
                >
                    <span class="sr-only">Previous month</span>
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
                    type="button"
                    class="hidden border-y border-gray-300 px-3.5 text-sm font-semibold text-gray-900 hover:bg-gray-50 focus:relative md:block"
                >{{ _('Today') }}
                </button>
                <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
                <button
                    wire:click="goToNextMonth"
                    type="button"
                    class="flex h-9 w-12 items-center justify-center rounded-r-md border-y border-r border-gray-300 pl-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pl-0 md:hover:bg-gray-50"
                >
                    <span class="sr-only">Next month</span>
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
        </div>
    </div>
    <div>
        @if($selectedEmployee)
            <div
                class="w-full overflow-x-auto overflow-y-auto relative"
            >
                <table class="w-full text-sm border-collapse border border-slate-400 ">
                    <thead class="relative border border-slate-200">
                    <tr>
                        <th class="border border-slate-300 min-w-[150px] sticky left-0 bg-white">Name</th>
                        @for($day = 1; $day <= $this->daysInCurrentMonth; $day++)
                            <th
                                class="
                            border border-slate-300 min-w-[50px]
                            @if(in_array($this->getDateNameFromDay($day)->dayOfWeek, [6,0]))
                                bg-slate-200
                            @endif
                        "
                            >
                                <div
                                    class="flex flex-col"
                                >
                                    <span>{{ $day }}</span>
                                    <span>{{ $this->getDateNameFromDay($day)->shortDayName }}</span>
                                </div>
                            </th>
                        @endfor
                    </tr>
                    </thead>
                    <tbody class="relative">
                    @foreach($clients as $key => $client)
                        <tr>
                            <td class="border border-slate-300 p-2 sticky left-0 bg-white">{{ $client['name'] }}</td>
                            @for($day = 1; $day <= $this->daysInCurrentMonth; $day++)
                                <td
                                    class="
                                    border border-slate-300
                                    hover:bg-slate-100
                                "
                                >

                                </td>
                            @endfor
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div>{{ _('Please select a Therapist') }}</div>
        @endif
    </div>
</div>
