<!-- component -->

<table class="w-full text-slate-700 text-md bg-white text-gray-800 dark:text-gray-300 dark:bg-gray-800 rounded-lg">
    <thead>
        <tr>
            <th class="text-left">Name</th>
            <th class="text-left">E-Mail</th>
            <th class="text-left">Rolle</th>
            <th class="text-right">Aktion</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><span class="rounded-sm bg-sky-600 text-white text-xs px-2 py-1">#User</span></td>
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
            
        @endforelse
    </tbody>
    <tfoot>
        <tr class="text-center">
            <td colspan="4">
                <p class="pt-4 text-sm">Users gesamt: {{ $users->count() }}</p>
            </td>  
        </tr>
    </tfoot>
</table>

    