@extends('main')

@section('title', 'Nominate a Champion')

@section('content')
<div class="bg-gray-800/50 backdrop-blur-lg p-8 rounded-lg shadow-lg w-full max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-2 text-center">Nominate a Champion</h1>
    <p class="text-gray-400 mb-8 text-center">Select a category to begin your nomination.</p>

    @if($categories->isEmpty())
        <div class="text-center text-gray-500 py-8">
            <p>No nomination categories are available at this time. Please check back later.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($categories as $category)
                <a href="#" class="card-glass text-center hover:border-blue-500/50 transition-colors duration-300 group">
                    <h3 class="card-glass__title group-hover:text-blue-400">{{ $category->name }}</h3>
                    <p class="card-glass__body">{{ $category->description ?? 'Click to nominate in this category.' }}</p>
                </a>
            @endforeach
        </div>
    @endif
</div>
@endsection