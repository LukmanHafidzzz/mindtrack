<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Journal;
use App\Models\Mood;
use App\Models\Quote;
use App\Models\Task;
use App\Models\TimeRecord;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::inRandomOrder()->first();
        return view('pages.home.home', compact('quotes'));
    }

    public function getDayDetails(Request $request)
    {
        $date = Carbon::parse($request->date)->startOfDay();
        $next = (clone $date)->endOfDay();
        $userId = Auth::id();

        $mood = Mood::where('user_id', $userId)
            ->whereBetween('updated_at', [$date, $next])
            ->first();

        $tasks = Task::where('user_id', $userId)
            ->where('is_completed', true)
            ->whereBetween('updated_at', [$date, $next])
            ->get();

        $journals = Journal::where('user_id', $userId)
            ->whereBetween('updated_at', [$date, $next])
            ->get();

        $totalDuration = TimeRecord::where('user_id', $userId)
            ->whereBetween('updated_at', [$date, $next])
            ->sum('duration');

        $hours = floor($totalDuration / 3600);
        $minutes = floor(($totalDuration % 3600) / 60);
        $seconds = $totalDuration % 60;

        $formattedTime = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);

        $achievements = Achievement::where('user_id', $userId)
            ->whereBetween('created_at', [$date, $next])
            ->get();

        return response()->json([
            'mood' => $mood->mood ?? null,
            'tasks' => $tasks,
            'journals' => $journals,
            'focus_time' => $formattedTime,
            'achievements' => $achievements,
        ]);
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
        //
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
