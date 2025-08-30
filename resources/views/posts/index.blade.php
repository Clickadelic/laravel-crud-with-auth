<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-row justify-between p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="mt-[3px]">{{ __("Alle Posts im Überblick") }}</h3>
                    <x-link-button size="sm" variant="indigo" :href="route('posts.create')" :active="request()->routeIs('posts.create')">
                        {{ __('Neuer Post') }}
                    </x-link-button>
                </div>
                <div class="flex flex-row justify-between px-5 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                        <div class="w-full bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="flex flex-row justify-between p-6 text-gray-900 dark:text-gray-100">
                    <x-posts-table :posts="$posts" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
