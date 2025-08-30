<!-- component -->
{{-- <div class="container mx-auto">
    @php
        echo '<pre>';
        var_dump($users[0]->toArray());
        echo '</pre>';
    @endphp
</div> --}}
<div class="w-full overflow-x-auto flex flex-row">
    <table class="table w-auto text-md bg-white text-gray-800 dark:text-gray-300 dark:bg-gray-800 rounded-lg">
        <thead>
            <tr>
                <th class="py-2 text-left">Id</th>
                <th class="py-2 text-left">Name</th>
                <th class="py-2 text-left">E-Mail</th>
                <th class="py-2 text-left">Registriert am</th>
                <th class="py-2 text-left">Verifiziert</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td class="text-left">
                        {{ $user->id }}
                    </td>
                    <td class="text-left">{{ $user->name }}</td>
                    <td class="text-left">{{ $user->email }}</td>
                    <td class="text-left">{{ $user->created_at->format('d.m.Y H:i') }} Uhr</td>
                    <td class="text-left">
                        {{ $user->email_verified_at ? '✓' : '✘' }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-xs">Keine Benutzer gefunden.</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr class="text-center">
                <td colspan="5">
                    <p class="pt-4 text-sm">Users gesamt: {{ $users->count() }}</p>
                </td>  
            </tr>
        </tfoot>
    </table>
</div>

    