<div
    class=""
    x-init="document.querySelector('#hour-{{ \Carbon\Carbon::now()->hour }}').scrollIntoView()"
>
    <div class="relative grid grid-cols-[100px_1fr_1fr_1fr_1fr_1fr_1fr_1fr] mt-4 gap-0 border-gray-200 text-sm max-h-[500px] overflow-y-auto">
        <div class="flex col-span-1 text-center bg-slate-50 py-2 items-center justify-center border sticky top-0">
            <span>{{ __('Time') }}</span>
        </div>
        @foreach(range(0, 6) as $day)
            @php($date = \Illuminate\Support\Carbon::now()->copy()->startOfWeek()->addDays($day))
            <div class="flex flex-col col-span-1 text-center bg-slate-50 py-2 text-xs items-center border sticky top-0">
                <span>{{ $date->format("l") }}</span><span>{{ $date->format("d.m") }}</span>
            </div>
        @endforeach

        @foreach(range(0, 23) as $hour)
            <div
                class="col-span-1 py-1 text-center border"
                id="hour-{{ $hour }}"
            >
                {{ \Illuminate\Support\Carbon::create(0,0,0, $hour)->format("H:i") }}
            </div>
            @foreach(range(0, 6) as $day)
                @php($date = \Illuminate\Support\Carbon::now()->copy()->startOfWeek()->setHour($hour)->addDays($day))
                <div class="flex flex-col col-span-1 border">
                    <div class="border-b w-full h-4 hover:bg-gray-50" wire:click="createAppointment('{{ $date->setMinute(0)->format('Y-m-d H:i:s') }}')"></div>
                    <div class="border-b w-full h-4 hover:bg-gray-50" wire:click="createAppointment('{{ $date->setMinute(15)->format('Y-m-d H:i:s') }}')"></div>
                    <div class="border-b w-full h-4 hover:bg-gray-50" wire:click="createAppointment('{{ $date->setMinute(30)->format('Y-m-d H:i:s') }}')"></div>
                    <div class="w-full h-4 hover:bg-gray-50" wire:click="createAppointment('{{ $date->setMinute(45)->format('Y-m-d H:i:s') }}')"></div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>
