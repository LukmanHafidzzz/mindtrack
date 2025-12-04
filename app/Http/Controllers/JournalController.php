<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;
use App\Services\AchievementService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::where('user_id', Auth::id())
            ->latest()
            ->get();

        $latestJournal = Journal::where('user_id', Auth::id())
            ->latest()
            ->first();

        return view('pages.journal.journal', compact('journals', 'latestJournal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'journal_file' => 'required|file|mimes:pdf|max:5120',
        ]);

        $path = $request->file('journal_file')
            ->store('journals', 'public');

        Journal::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'journal_file' => $path,
        ]);

        $totalJournal = Journal::where('user_id', Auth::id())->count();

        AchievementService::check(
            Auth::id(),
            'journal',
            $totalJournal
        );

        return redirect()->back()->with('success', 'Journal added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
