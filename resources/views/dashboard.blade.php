@extends('main')

@section('title', 'My Dashboard')

@section('content')
<div class="bg-gray-800/50 backdrop-blur-lg p-8 rounded-lg shadow-lg w-full max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">My Dashboard</h1>
    <p>Welcome to your dashboard, {{ auth()->user()->name }}!</p>
</div>
@endsection