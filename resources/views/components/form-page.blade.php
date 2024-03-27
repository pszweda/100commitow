@props(['submit'])
<form wire:submit="{{ $submit }}">
    <div {{ $attributes->merge(['class' => 'flex flex-col']) }}>
        <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
            <div class="flex flex-col pb-4">
                <div class="font-bold">{{ $title }}</div>
                <div class="text-xs">{{ $description }}</div>
            </div>

            <div class="">
                {{ $form }}
            </div>
        </div>
        @if (isset($actions))
            <div class="flex items-center justify-between px-4 py-3 bg-gray-50 dark:bg-gray-800 text-end sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                {{ $actions }}
            </div>
        @endif

    </div>

</form>
