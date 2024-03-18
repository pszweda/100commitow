<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('settings.heading') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 py-10 mx-auto max-w-7xl px-6">
        @include('settings.menu')
        @switch(request()->route()->getName())
            @case('settings')
                @include('settings.pages.general')
            @break
            @case('settings.services')
                @include('settings.pages.services')
            @break
            @case('settings.goals')
                @include('settings.pages.goals')
            @break
            @case('settings.pricing')
                @include('settings.pages.pricing')
            @break
        @endswitch
    </div>
</x-app-layout>
