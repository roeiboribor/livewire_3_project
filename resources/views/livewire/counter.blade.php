<div class="px-4">
    @if (session('success'))
    <div class="mb-4 p-4 bg-green-300 text-green-800 rounded-md flex items-center justify-between">
        <span>{{ session('success') }}</span>
        <span wire:click="handleForgetSession" class="cursor-pointer">
            <i class='bx bx-x-circle'></i>
        </span>
    </div>
    @endif
    <form wire:submit="handleSubmit">
        <div class="space-y-4">
            <div>
                <input wire:model.blur="name" name="name" type="text" placeholder="name"
                    class="block border border-gray-100 rounded-md px-3 py-1 w-full">
                @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input wire:model.blur="email" name="email" type="email" placeholder="email"
                    class="block border border-gray-100 rounded-md px-3 py-1 w-full">
                @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <input wire:model.blur="password" name="password" type="text" placeholder="password"
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
        <div class="mt-4">
            {{ $users->links() }}
        </div>
    </div>
</div>