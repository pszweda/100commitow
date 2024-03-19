<div>
    <form wire:submit.prevent="submit">
        @csrf

        <x-label for="name" value="{{ __('settings.pages.general.name') }}" />
        <x-input id="name" class="py-1 mt-1 w-full" type="text" name="name" wire:model="name" required autofocus />
        <x-input-error for="name" class="mt-2" />


        <div class="flex items-center justify-end mt-4">
            <x-button class="mt-4">
                {{ __('settings.pages.general.save') }}
            </x-button>
        </div>
    </form>
</div>
