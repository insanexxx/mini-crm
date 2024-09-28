<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="first_name" class="block text-gray-700">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="last_name" class="block text-gray-700">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700">Email</label>
                            <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700">Phone</label>
                            <input type="text" name="phone" id="phone" class="mt-1 block w-full border-gray-300 rounded-md" required>
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                                {{ __('Create Employee') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
