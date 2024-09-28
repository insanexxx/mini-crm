<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('companies.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                        {{ __('Create Company') }}
                    </a>

                    <table class="min-w-full mt-6 divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-2 text-left">ID</th>
                                <th class="py-2 text-left">Name</th>
                                <th class="py-2 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-2 text-left">{{ $company->id }}</td>
                                    <td class="py-2 text-left">{{ $company->name }}</td>
                                    <td class="py-2 text-left flex space-x-4">
                                        <a href="{{ route('companies.edit', $company) }}" class="text-blue-500 hover:text-blue-700">
                                            {{ __('Edit') }}
                                        </a>
                                        <form action="{{ route('companies.destroy', $company) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Пагинация -->
                    <div class="mt-4">
                        {{ $companies->links() }} <!-- Вставка пагинации -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
