@extends('admin.layout')

@section('title', 'Create New Category')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Create New Category</h1>

    <div class="bg-gray-800/50 backdrop-blur-lg p-8 rounded-lg shadow-lg w-full max-w-2xl mx-auto">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block mb-2 text-sm font-medium">Category Name</label>
                <input type="text" name="name" id="name" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium">Description (Optional)</label>
                <textarea name="description" id="description" rows="4" class="bg-gray-700 border border-gray-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end">
                <a href="{{ route('admin.categories.index') }}" class="button button--secondary mr-4">Cancel</a>
                <button type="submit" class="button button--primary">Create Category</button>
            </div>
        </form>
    </div>
@endsection