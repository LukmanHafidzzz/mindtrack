<?php

namespace App\Http\Controllers;

use App\Models\TimeRecord;
use App\Services\AchievementService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.time.time');
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
            'type' => 'required|in:timer,stopwatch',
            'duration' => 'required|integer|min:1',
        ]);

        TimeRecord::create([
            'user_id' => Auth::id(),
            'type'     => $request->type,
            'duration' => $request->duration,
        ]);

        $totalSeconds = TimeRecord::where('user_id', Auth::id())->sum('duration');

        $totalHours = intdiv($totalSeconds, 3600);

        if ($totalHours > 0) {
            AchievementService::check(
                Auth::id(),
                'focus',
                $totalHours
            );
        }

        return response()->json([
            'message' => 'Time record saved successfully'
        ], 201);
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
