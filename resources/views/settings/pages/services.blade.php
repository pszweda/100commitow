<div class="col-span-3">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6" x-data="{ selectedService: null }">
        <x-page-title class="flex justify-between">
            {{ __('settings.pages.services.heading') }}

            <x-wireui-button black label="{{ __('settings.pages.services.add') }}" />
        </x-page-title>


        @livewire('services.services-table', [
            'showFilters' => false
        ])

        <x-wireui-modal name="service-form">
            <x-wireui-card title="{{ __('settings.pages.services.form_title') }}">
                <livewire:settings.services-form/>
            </x-wireui-card>
        </x-wireui-modal>
    </div>
</div>
