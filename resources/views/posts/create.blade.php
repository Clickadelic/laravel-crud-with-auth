<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Neuer Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @php
                        // PHP here
                        
                    @endphp
                    <form class="flex flex-col space-y-4 justify-between items-center" method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        @if($update ?? false)
                            @method('PUT')
                        @endif
                        <div class="w-full space-y-2">
                            <x-input-label for="title" :value="__('Titel')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title' ?? null)" placeholder="Titel des Posts" required autofocus autocomplete="title" />
                            <x-input-error :messages="$errors->get('title')" />
                        </div>
                        <div class="w-full space-y-2">
                            <x-input-label for="content" :value="__('Content')" />
                            <x-textarea id="content" rows="5" class="block mt-1 w-full" type="text" name="content" :value="old('content' ?? null)" placeholder="Es war einmal..." required autofocus autocomplete="content" />
                            <x-input-error :messages="$errors->get('content')" />
                        </div>
                        <x-button class="w-full" variant="indigo">{{ $update ?? false ? 'Aktualisieren' : 'Erstellen' }}</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>