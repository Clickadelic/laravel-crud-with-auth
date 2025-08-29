<!-- component -->

<table class="w-full text-md bg-white text-gray-800 dark:text-gray-300 dark:bg-gray-800 rounded-lg">
    <thead>
        <tr>
            <th class="text-left">Titel</th>
            <th class="text-left">von</th>
            <th class="text-left">Erstellt am</th>
            <th class="text-left">Aktion</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)
            <tr>
                <td class="text-left">{{ $post->name }}</td>
                <td class="text-left">{{ $post->user_id->name }}</td>
                <td class="text-left">{{ $post->created_at }}</td>
                <td class="text-right">
                    <x-button variant="ghost" size="sm">
                        {{ __('Bearbeiten') }}
                    </x-button>
                    <x-button variant="danger" size="sm">
                        {{ __('Löschen') }}
                    </x-button>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">Keine Posts gefunden.</td>
            </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr class="text-center">
            <td colspan="4">
                <p class="pt-4 text-sm">Posts gesamt: {{ $posts->count() }}</p>
            </td>  
        </tr>
    </tfoot>
</table>

    