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
            @if(!$selectedDate->isToday())
                <button
                    class="align-middle content-center px-2 py-1.5 border border-gray-500 rounded-lg hover:bg-blue-500"
                    wire:click="goToToday"
                >
                    <x-bladewind.icon
                        name="calendar"
                        class="w-2 h-2"
                    />
                </button>
            @endif
            <button
                class="align-middle content-center px-2 py-1.5 border border-gray-500 rounded-lg hover:bg-blue-500"
                wire:click="goToPreviousMonth"
            >
                <x-bladewind.icon
                    name="chevron-left"
                    class="w-2 h-2"
                />
            </button>
            <div
                class="flex align-middle justify-center min-w-[150px] text-center"
            >
                {{ $selectedDate->format('F Y') }}
            </div>
            <button
                class="align-middle content-center px-2 py-1.5 border border-gray-500 rounded-lg hover:bg-blue-500"
                wire:click="goToNextMonth"
            >
                <x-bladewind.icon
                    name="chevron-right"
                    class="w-2 h-2"
                />
            </button>
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
                            <th class="
                            border border-slate-300 min-w-[50px]
                            @if(in_array($this->getDateNameFromDay($day)->dayOfWeek, [6,0]))
                                bg-slate-200
                            @endif
                        ">
                                <div
                                    class="flex flex-col">
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
