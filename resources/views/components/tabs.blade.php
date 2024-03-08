<div x-data="{ activeTab: {{ $attributes->get('active-tab') ?? 0 }} }">
    <nav class="flex flex-col sm:flex-row border-b border-gray-200">
        @foreach($tabs as $index => $tab)
            <button
                class="text-gray-600 py-4 px-6 block hover:text-blue-500 focus:outline-none"
                :class="activeTab === {{ $index }} ? 'text-blue-500 border-b-2 border-blue-500' : ''"
                @click="activeTab = {{ $index }}"
            >
                {!! $tab['title'] !!}
            </button>
        @endforeach
    </nav>
    <div class="py-2 px-4">
        @foreach($tabs as $index => $tab)
            <div x-show="activeTab === {{ $index }}">
                {!! $tab['content'] !!}
            </div>
        @endforeach
    </div>
</div>
