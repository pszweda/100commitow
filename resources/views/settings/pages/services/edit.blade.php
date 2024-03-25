<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('settings.pages.services.edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl md:max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 py-5 sm:p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight mb-4">
                    {{ __('settings.pages.services.edit') }}
                </h2>

                <form
                    action="{{ $service->id->toString() }}"
                    method="POST"
                >
                    @csrf

                    <div class="pb-4">
                        <x-label
                            for="name"
                            value="{{ __('settings.pages.services.name') }}"
                        />
                        <x-input
                            id="name"
                            class="block mt-1 w-full"
                            type="text"
                            name="name"
                            value="{{ $service->name }}"
                            required
                            autofocus
                        />
                    </div>

                    <div class="pb-4">
                        <x-label
                            for="price"
                            value="{{ __('settings.pages.services.price') }}"
                        />
                        <x-wireui-input
                            id="price"
                            class="block mt-1 w-full"
                            type="text"
                            name="price"
                            value="{{ $service->price->getAmount() }}"
                            suffix="EUR"
                            required
                            autofocus
                        />
                    </div>

                    <div class="pb-4">
                        <x-label
                            for="description"
                            value="{{ __('settings.pages.services.description') }}"
                        />
                        <x-wireui-textarea
                            id="description"
                            class="block mt-1 w-full"
                            name="description"
                            value="{{ $service->description }}"
                            placeholder="{{ __('settings.pages.services.description') }}"
                        />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('settings.pages.services.update') }}
                        </x-button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
