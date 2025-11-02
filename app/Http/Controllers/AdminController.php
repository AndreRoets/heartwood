<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcessStatus;
use App\Models\Nomination; // Added
use Carbon\Carbon;

class AdminController extends Controller
{
    // Added index method for nominations
    public function index()
    {
        $nominations = Nomination::where('status', 'pending')->get(); // Fetch pending nominations
        return view('admin.nominations.index', compact('nominations'));
    }

    public function startProcess(Request $request)
    {
        $nominationDays = 3;
        $choosingDays = 1;
        $votingDays = 3;

        $now = Carbon::now();

        $nominationStartsAt = $now;
        $nominationEndsAt = $now->copy()->addDays($nominationDays);
        $choosingEndsAt = $nominationEndsAt->copy()->addDays($choosingDays);
        $votingEndsAt = $choosingEndsAt->copy()->addDays($votingDays);

        Nomination::query()->delete(); // Delete all old nominations
        $processStatus = ProcessStatus::firstOrNew([]);
        $processStatus->status = 'nominating';
        $processStatus->nomination_starts_at = $nominationStartsAt;
        $processStatus->nomination_ends_at = $nominationEndsAt;
        $processStatus->choosing_ends_at = $choosingEndsAt;
        $processStatus->voting_ends_at = $votingEndsAt;
        $processStatus->save();

        return redirect()->back()->with('success', 'Nomination and voting process started successfully!');
    }

    public function skipToVoting(Request $request)
    {
        $now = Carbon::now();
        $processStatus = ProcessStatus::firstOrNew([]);
        $processStatus->status = 'voting';
        $processStatus->nomination_starts_at = $now->copy()->subDays(5);
        $processStatus->nomination_ends_at = $now->copy()->subDays(4);
        $processStatus->choosing_ends_at = $now->copy()->subDays(3);
        $processStatus->voting_ends_at = $now->copy()->addDays(3);
        $processStatus->save();

        return redirect()->back()->with('success', 'Process skipped to voting successfully!');
    }

    public function skipToResults(Request $request)
    {
        $now = Carbon::now();
        $processStatus = ProcessStatus::firstOrNew([]);
        $processStatus->status = 'results';
        $processStatus->nomination_starts_at = $now->copy()->subDays(10);
        $processStatus->nomination_ends_at = $now->copy()->subDays(9);
        $processStatus->choosing_ends_at = $now->copy()->subDays(8);
        $processStatus->voting_ends_at = $now->copy()->subDays(7);
        $processStatus->save();

        return redirect()->back()->with('success', 'Process skipped to results successfully!');
    }

    // Added approve method
    public function approve(Nomination $nomination)
    {
        $nomination->status = 'approved';
        $nomination->save();
        return redirect()->back()->with('success', 'Nomination approved successfully!');
    }

    // Added reject method
    public function reject(Nomination $nomination)
    {
        $nomination->status = 'rejected';
        $nomination->save();
        return redirect()->back()->with('success', 'Nomination rejected successfully!');
    }

    // Added show method
    public function adminDashboard()
    {
        $processStatus = ProcessStatus::firstOrNew([]);
        return view('admin.dashboard', compact('processStatus'));
    }

    public function show(Nomination $nomination)
    {
        return view('admin.nominations.show', compact('nomination'));
    }

    public function stopProcess()
    {
        $processStatus = ProcessStatus::firstOrNew([]);
        $processStatus->status = 'inactive';
        $processStatus->save();

        return redirect()->back()->with('success', 'Nomination and voting process stopped.');
    }

    public function startNomination()
    {
        $nominationDays = 3;
        $now = Carbon::now();

        $processStatus = ProcessStatus::firstOrNew([]);
        $processStatus->status = 'nominating';
        $processStatus->nomination_starts_at = $now;
        $processStatus->nomination_ends_at = $now->copy()->addDays($nominationDays);
        $processStatus->choosing_ends_at = null; // Reset these for a fresh start
        $processStatus->voting_ends_at = null;   // Reset these for a fresh start
        $processStatus->save();

        return redirect()->back()->with('success', 'Nomination process started.');
    }
}
