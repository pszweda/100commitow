<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('settings.pages.services.create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl md:max-w-2xl mx-auto sm:px-6 lg:px-8">
            <livewire:services.create-service-form wire:submit="createService">
            </livewire:services.create-service-form>
        </div>
    </div>

</x-app-layout>
