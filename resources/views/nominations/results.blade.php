@extends('main')

@section('content')
<div class="container">
    <h1>Nomination Results</h1>

    @forelse ($categoryWinners as $data)
        <div class="category-results mb-4">
            <h2>{{ $data['category']->name }}</h2>
            @if ($data['winner'])
                <div class="winner-card p-3 border rounded">
                    <h3>{{ $data['winner']->title }}</h3>
                    <p>{{ $data['winner']->description }}</p>
                    @if ($data['winner']->images)
                        <div class="winner-images d-flex flex-wrap mt-2">
                            @foreach ($data['winner']->images as $imagePath)
                                <img src="{{ asset('storage/' . $imagePath) }}" alt="Nomination Image" class="img-thumbnail me-2 mb-2" style="max-width: 150px; height: auto;">
                            @endforeach
                        </div>
                    @endif
                    <p class="text-muted">Votes: {{ $data['winner']->votes_count }}</p>
                </div>
            @else
                <p>No winner for this category yet.</p>
            @endif
        </div>
    @empty
        <p>No categories with results found.</p>
    @endforelse
</div>
@endsection
