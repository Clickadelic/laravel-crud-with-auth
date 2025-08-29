<!-- component -->

<table class="w-full text-md bg-white text-gray-800 dark:text-gray-300 dark:bg-gray-800 rounded-lg">
    <thead>
        <tr>
            <th class="py-2 text-left">Titel</th>
            <th class="py-2 text-left invisible sm:visible">Content</th>
            <th class="py-2 text-left invisible sm:visible">von</th>
            <th class="py-2 text-left invisible sm:visible">Erstellt am</th>
            <th class="py-2 text-right pr-4">Aktion</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
        @forelse($posts as $post)
            <tr>
                <td class="py-2 text-left">{{ $post->title }}</td>
                <td class="py-2 text-left invisible sm:visible">{{ $post->content }}</td>
                <td class="py-2 text-left invisible sm:visible">{{ $post->user_id }}</td>
                <td class="py-2 text-left invisible sm:visible">{{ $post->created_at->format('d.m.Y H:i') }} Uhr</td>
                <td class="py-2 text-right flex flex-row justify-end items-end gap-2">
                    <x-link-button href="{{ route('posts.edit', $post) }}" variant="" size="sm" title="{{ __('Bearbeiten') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                        </svg>
                    </x-link-button>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-flex">
                        @csrf
                        @method('DELETE')

                        <button type="submit" href={{ route('posts.destroy', $post) }} variant="danger" size="sm" title="{{ __('Löschen') }}" class="hover:cursor-pointer p-2 rounded text-rose-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </button>
                    </form>
                </td>
            </tr> 
        @empty
            <tr>
                <td colspan="5" class="text-center text-xs">Keine Posts gefunden.</td>
            </tr>
        @endforelse
    </tbody>
</table>

    