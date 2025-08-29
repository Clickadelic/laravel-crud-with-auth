@props(
    // Set the default value to null, no Post data in the form
    ['post' => null]
)
<form class="flex flex-col space-y-4 justify-between items-center" method="POST" action="{{ route('posts.store') }}">
    @csrf
    @if(isset($post))
        @method('PUT')
    @endif
    <div class="w-full space-y-2">
        <x-input-label for="title" :value="__('Titel')" />
        <x-text-input name="title" id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title' ?? null)" placeholder="Titel des Posts" required autofocus autocomplete="title" />
        <x-input-error :messages="$errors->get('title')" />
        {{-- Test Error --}}
        @if($errors->any())
            <ul class="list-disc list-inside text-rose-600">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @error('title')
            <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
        @enderror
    </div>
    <div class="w-full space-y-2">
        <x-input-label for="content" :value="__('Content')" />
        <x-textarea name="content" id="content" rows="5" class="block mt-1 w-full" type="text" name="content" :value="old('content' ?? null)" placeholder="Es war einmal..." required autofocus autocomplete="content" />
        <x-input-error :messages="$errors->get('content')" />
        {{-- Test Error --}}
        @error('content')
            <span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>
        @enderror
    </div>
    <x-button class="w-full" variant="indigo" type="submit">{{ $post ?? false ? 'Aktualisieren' : 'Erstellen' }}</x-button>
</form>