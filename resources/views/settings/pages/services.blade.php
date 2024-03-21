<div class="col-span-3">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
        <x-page-title>
            {{ __('settings.pages.services.heading') }}
        </x-page-title>

        @livewire('datatable.datatable', [
            'columns' => [
                'service_name' => [
                    'label' => __('settings.pages.services.service_name'),
                ],
                'default_pricing' => [
                    'label' => __('settings.pages.services.default_pricing'),
                ],
                'actions' => [
                    'label' => __('settings.pages.services.actions'),
                ],
            ],
            'data' => [
                [
                    'service_name' => __('settings.pages.services.service_name'),
                ]
            ],
            'showRowNumber' => true,
            'rowsPerPage' => 10,
            'massActions' => [
                'delete' => true,
            ]

        ])

    </div>
</div>
