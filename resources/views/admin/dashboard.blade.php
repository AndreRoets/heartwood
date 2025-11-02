@extends('admin.layout')

@section('title', 'Admin Dashboard')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Admin Dashboard</h1>
    <p>Welcome to the admin panel, {{ auth()->user()->name }}!</p>

    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Manage Nomination/Voting Process</h2>

        <p class="mb-4">Current Process Status: <span class="font-bold">{{ ucfirst($processStatus->status) }}</span></p>

        @if ($processStatus->status === 'inactive')
            <form action="{{ route('admin.process.startNomination') }}" method="POST" class="inline-block">
                @csrf
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Start Nomination Process
                </button>
            </form>
        @else
            <form action="{{ route('admin.process.stop') }}" method="POST" class="inline-block">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                    Stop All Processes
                </button>
            </form>

            @if ($processStatus->status === 'nominating')
                <form action="{{ route('admin.process.skipToVoting') }}" method="POST" class="inline-block ml-4">
                    @csrf
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Skip to Voting
                    </button>
                </form>
            @endif

            @if ($processStatus->status === 'voting')
                <form action="{{ route('admin.process.skipToResults') }}" method="POST" class="inline-block ml-4">
                    @csrf
                    <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                        Skip to Results
                    </button>
                </form>
            @endif
        @endif
    </div>
@endsection