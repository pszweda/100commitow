<div class="col-span-1">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
        <div class="py-6">
            <div class="flex flex-col">
                <x-subview-menu-item
                    :href="route('settings')"
                    :active="request()->routeIs('settings')"
                >
                    {{ __('settings.menu.general') }}
                </x-subview-menu-item>
                <x-subview-menu-item
                    :href="route('settings.services')"
                    :active="request()->routeIs('settings.services')"
                >
                    {{ __('settings.menu.services') }}
                </x-subview-menu-item>
                <x-subview-menu-item
                    :href="route('settings.goals')"
                    :active="request()->routeIs('settings.goals')"
                >
                    {{ __('settings.menu.goals') }}
                </x-subview-menu-item>
                <x-subview-menu-item
                    :href="route('settings.pricing')"
                    :active="request()->routeIs('settings.pricing')"
                >
                    {{ __('settings.menu.pricing') }}
                </x-subview-menu-item>
            </div>
        </div>
    </div>
</div>
