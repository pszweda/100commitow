<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl py-2 text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Appointments - list') }}
                </h2>
            </div>
            <div>
                <x-button class="ml-4" href="#">
                    <x-bladewind.icon name="plus" class="w-3 h-3 mr-2" />{{ __('Add new') }}</x-button>
            </div>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg min-h-[500px]">
                <x-bladewind.tab-group name="staff-loans">

                    <x-slot name="headings">

                        <x-bladewind.tab-heading
                            name="therapists"
                            label="Therapists clients" />

                        <x-bladewind.tab-heading
                            name="calendar"
                            active="true"
                            label="General calendar" />

                    </x-slot>

                    <x-bladewind.tab-body>

                        <x-bladewind.tab-content name="therapists">

                            @livewire('appointments.employeeAppointments')

                        </x-bladewind.tab-content>

                        <x-bladewind.tab-content name="calendar" active="true">

                            @livewire('calendar.calendar')

                        </x-bladewind.tab-content>

                    </x-bladewind.tab-body>

                </x-bladewind.tab-group>
            </div>
        </div>
    </div>
</x-app-layout>
