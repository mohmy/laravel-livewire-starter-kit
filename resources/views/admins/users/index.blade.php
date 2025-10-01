<x-layouts.app>
    <div class="min-w-full align-middle">
        <table class="min-w-full divide-y divide-gray-200 border rounded">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Title</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                </th>
            </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            @foreach($users as $user)
                <tr class="bg-white">
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        {{ $user->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                        <flux:button :href="route('admin.user.show', $user)">Edit</flux:button>
                        <a href="{{route('admin.user.edit', $user)}}" class="bg-green-500 m-2 p-2">Edit</a>
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-2">
        {{ $users->links() }}
    </div>
</x-layouts.app>
