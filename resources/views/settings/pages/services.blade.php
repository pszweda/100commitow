<div class="col-span-3">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
        <x-page-title class="flex justify-between">
            {{ __('settings.pages.services.heading') }}

            <x-button black label="{{ __('settings.pages.services.add') }}" />
        </x-page-title>


        @livewire('settings.services-table')


    </div>
</div>
