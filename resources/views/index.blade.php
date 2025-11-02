@extends('admin.layout')

@section('title', 'Manage Categories')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Manage Categories</h1>
        <a href="{{ route('admin.categories.create') }}" class="button button--primary">Add New Category</a>
    </div>

    @if (session('success'))
        <div class="bg-green-500/20 text-green-300 p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-gray-800/50 backdrop-blur-lg rounded-lg shadow-lg overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-700/50">
                <tr>
                    <th class="p-4 font-semibold">Name</th>
                    <th class="p-4 font-semibold">Description</th>
                    <th class="p-4 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr class="border-t border-gray-700">
                        <td class="p-4">{{ $category->name }}</td>
                        <td class="p-4 text-gray-400">{{ $category->description ?? 'N/A' }}</td>
                        <td class="p-4 text-right">
                            {{-- Action buttons will go here later --}}
                            <a href="#" class="text-blue-400 hover:text-blue-300">Edit</a>
                            <a href="#" class="text-red-400 hover:text-red-300 ml-4">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center p-8 text-gray-500">No categories found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $categories->links() }}
    </div>
@endsection