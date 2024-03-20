<div>
    <form wire:submit.prevent="submit">
        @csrf

        <x-label
            for="mode"
            value="{{ __('settings.pages.general.mode') }}"
        />
        <select
            id="mode"
            class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            wire:model="mode"
        >
            <option value="light">{{ __('settings.pages.general.light') }}</option>
            <option value="dark">{{ __('settings.pages.general.dark') }}</option>
            <option value="system">{{ __('settings.pages.general.system') }}</option>
        </select>
            <x-input-error
                for="mode"
                class="mt-2"
            />


            <div class="flex items-center justify-end mt-4">
                <x-button class="mt-4">
                    {{ __('settings.pages.general.save') }}
                </x-button>
            </div>
    </form>
</div>
