<div>
    <x-form-page submit="updateService">
        <x-slot name="title">
            {{ __('services.edit') }}
        </x-slot>

        <x-slot name="description">
            {{ __('services.edit_description') }}
        </x-slot>

        <x-slot name="form">
            <div class="flex flex-col gap-4">
                <div>
                    <x-label for="name" value="{{ __('services.name') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" autofocus />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div>
                    <x-label for="name" value="{{ __('services.price') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.price" autofocus />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div>
                    <x-label for="name" value="{{ __('services.description') }}" />
                    <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.description" autofocus />
                    <x-input-error for="name" class="mt-2" />
                </div>
            </div>
        </x-slot>

        <x-slot name="actions" class="flex justify-between">
            <x-wireui-button wire:click="goBack()">
                {{ __('services.cancel') }}
            </x-wireui-button>
            <x-wireui-button primary type="submit">
                {{ __('services.save') }}
            </x-wireui-button>
        </x-slot>
    </x-form-page>
</div>
