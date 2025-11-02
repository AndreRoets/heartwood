@extends('admin.layout')

@section('title', 'Review Nominations')

@section('content')
<div class="bg-gray-800/50 backdrop-blur-lg p-8 rounded-lg shadow-lg w-full max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-2 text-center">Review Nominations</h1>
    <p class="text-gray-400 mb-8 text-center">Review and approve or reject pending nominations.</p>

    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($nominations->isEmpty())
        <div class="text-center text-gray-500 py-8">
            <p>No pending nominations to review.</p>
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full bg-gray-800 rounded-lg">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-300 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-900 divide-y divide-gray-700">
                    @foreach ($nominations as $nomination)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $nomination->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">{{ $nomination->category->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-300">{{ Str::limit($nomination->description, 50) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('admin.nominations.show', $nomination) }}" class="text-blue-400 hover:text-blue-600 mr-4">View</a>
                                <form action="{{ route('admin.nominations.approve', $nomination) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-green-400 hover:text-green-600">Approve</button>
                                </form>
                                <form action="{{ route('admin.nominations.reject', $nomination) }}" method="POST" class="inline-block ml-4">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="text-red-400 hover:text-red-600">Reject</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
