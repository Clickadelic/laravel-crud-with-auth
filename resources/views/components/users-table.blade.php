<!-- component -->

<table class="w-full text-slate-700 text-md bg-white text-gray-800 dark:text-gray-300 dark:bg-gray-800 rounded-lg">
    <thead>
        <tr>
            <th class="text-left">Name</th>
            <th class="text-left">Col 2</th>
            <th class="text-left">Col 3</th>
            <th class="text-left">Col 4</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Max Mustermann</td>
            <td>Col 2</td>
            <td>Col 3</td>
            <td>Col 4</td>
        </tr>
    </tbody>
    <tfoot>
        <tr class="text-center">
            <td colspan="4">
                <p class="pt-4 text-sm">Users gesamt: {{ $users->count() }}</p>
            </td>  
        </tr>
    </tfoot>
</table>

    