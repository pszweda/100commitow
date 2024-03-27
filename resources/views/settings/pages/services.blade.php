<div class="col-span-3">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6" x-data="{ selectedService: null }">
        <x-page-title class="flex justify-between">
            {{ __('settings.pages.services.heading') }}

            <x-wireui-button black href="{{ route('settings.services.create') }}" label="{{ __('settings.pages.services.add') }}" />
        </x-page-title>


        @livewire('services.services-table', [
            'showFilters' => false
        ])
    </div>
</div>
