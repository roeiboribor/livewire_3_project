<div class="px-4">
    <form wire:submit="handleSubmit">
        <div class="space-y-4">
            <div>
                <input wire:model="name" name="name" type="text" placeholder="name"
                    class="block border border-gray-100 rounded-md px-3 py-1 w-full">
                @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input wire:model="email" name="email" type="email" placeholder="email"
                    class="block border border-gray-100 rounded-md px-3 py-1 w-full">
                @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input wire:model="password" name="password" type="text" placeholder="password"
                    class="block border border-gray-100 rounded-md px-3 py-1 w-full">
                @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <button class="transition bg-blue-500 hover:bg-blue-700 px-3.5 py-1.5 rounded-xl text-white shadow">
                    Send
                </button>
            </div>
        </div>
    </form>
    <div class="mt-10">
        <table>
            @forelse ($users as $user)
            <tr>
                <td class="px-2 border border-gray-300">{{ $loop->index+1 }}</td>
                <td class="px-2 border border-gray-300">{{ $user['name'] }}</td>
                <td class="px-2 border border-gray-300">{{ $user['email'] }}</td>
            </tr>
            @empty
            <tr>
                <td>
                    No Users
                </td>
            </tr>
            @endforelse
        </table>
    </div>
</div>