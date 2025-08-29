<!-- component -->

<table class="w-full text-md bg-white text-gray-800 dark:text-gray-300 dark:bg-gray-800 rounded-lg">
    <thead>
        <tr>
            <th class="py-2 text-left">Titel</th>
            <th class="py-2 text-left">Content</th>
            <th class="py-2 text-left">von</th>
            <th class="py-2 text-left">Erstellt am</th>
            <th class="py-2 text-left">Aktion</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        @forelse($posts as $post)
            <tr>
                <td class="py-2 text-left">{{ $post->title }}</td>
                <td class="py-2 text-left">{{ $post->content }}</td>
                <td class="py-2 text-left">{{ $post->user_id }}</td>
                <td class="py-2 text-left">{{ $post->created_at->format('d.m.Y H:i') }} Uhr</td>
                <td class="py-2 text-right">
                    <x-button variant="ghost" size="sm">
                        {{ __('Bearbeiten') }}
                    </x-button>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <x-button type="submit"
                            onclick="return confirm('Diesen Post wirklich löschen?')"
                            class="text-red-600 hover:underline">
                        Löschen
                        </x-button>
                    </form>
                </td>
            </tr> 
        @empty
            <tr>
                <td colspan="5" class="text-center text-xs">Keine Posts gefunden.</td>
            </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr class="text-center">
            <td colspan="5">
                <p class="pt-4 text-sm">Posts gesamt: {{ $posts->count() }}</p>
            </td>  
        </tr>
    </tfoot>
</table>

    