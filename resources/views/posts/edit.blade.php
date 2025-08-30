<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Posts') }}
        </h2>
    </x-slot>
    {{-- @php
        echo '<pre class="text-sm text-gray-600 dark:text-gray-400">';
        var_dump($post);
        echo '</pre>';
    @endphp --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-post-form :post="$post" />
                </div>
                <div class="w-full px-6 pb-6">
                    <x-link-button size="sm" variant="indigo" :href="route('posts.index')" :active="request()->routeIs('posts.index')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223"/>
                        </svg>
                        {{ __('Zurück') }}
                    </x-link-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
