<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
                            active="true"
                            label="Therapists clients" />

                        <x-bladewind.tab-heading
                            name="tests"
                            label="Test" />

                    </x-slot>

                    <x-bladewind.tab-body>

                        <x-bladewind.tab-content name="therapists" active="true">

                            <div>
                                <select
                                    class="w-full border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm"
                                >
                                    <option value="">{{ __('Select Therapist') }}</option>
                                    <option value="1">John</option>
                                    <option value="2">Jane</option>
                                    <option value="3">Mark</option>
                                    <option value="4">Sally</option>
                                    <option value="5">Sam</option>
                                </select>
                            </div>
                            <div>
                                <table class="w-full text-sm border-collapse border border-slate-400">
                                    <thead>
                                        <tr>
                                            <th class="border border-slate-300">Name</th>
                                            <th class="border border-slate-300">1</th>
                                            <th class="border border-slate-300">2</th>
                                            <th class="border border-slate-300">3</th>
                                            <th class="border border-slate-300">4</th>
                                            <th class="border border-slate-300">5</th>
                                            <th class="border border-slate-300">6</th>
                                            <th class="border border-slate-300">7</th>
                                            <th class="border border-slate-300">8</th>
                                            <th class="border border-slate-300">9</th>
                                            <th class="border border-slate-300">10</th>
                                            <th class="border border-slate-300">11</th>
                                            <th class="border border-slate-300">12</th>
                                            <th class="border border-slate-300">13</th>
                                            <th class="border border-slate-300">14</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border border-slate-300 bg-green-500">X</td>
                                            <td class="border border-slate-300 ">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300 bg-red-400">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                        <tr>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                            <td class="border border-slate-300">X</td>
                                        </tr>
                                    </tbody>
                            </div>

                        </x-bladewind.tab-content>

                        <x-bladewind.tab-content name="tests">

                        </x-bladewind.tab-content>

                    </x-bladewind.tab-body>

                </x-bladewind.tab-group>
            </div>
        </div>
    </div>
</x-app-layout>
