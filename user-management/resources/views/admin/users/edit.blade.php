<!-- resources/views/admin/users/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow sm:rounded-lg">
                <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="block font-medium text-sm text-gray-700">Name:</label>
                        <input id="name" type="text" name="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ $user->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block font-medium text-sm text-gray-700">Email:</label>
                        <input id="email" type="email" name="email" class="form-input rounded-md shadow-sm mt-1 block w-full"
                               value="{{ $user->email }}" required>
                    </div>

                    <div class="mb-4">
                        <label for="role" class="block font-medium text-sm text-gray-700">Role:</label>
                        <select id="role" name="role" class="form-select rounded-md shadow-sm mt-1 block w-full" required>
                            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                        </select>
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700">
                            Update User
                        </button>
                        <a href="{{ route('admin.users.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md text-black hover:bg-gray-400">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

