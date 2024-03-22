<div class="col-span-3">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
        <x-page-title>
            {{ __('settings.pages.services.heading') }}
        </x-page-title>

        <x-select
            label="Select Status"
            placeholder="Select one status"
            :options="['Active', 'Pending', 'Stuck', 'Done']"
        />



    </div>
</div>
