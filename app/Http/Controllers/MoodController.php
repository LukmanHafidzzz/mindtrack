<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::today();

        $alreadyFilled = Mood::where('user_id', Auth::id())
            ->whereDate('created_at', $today)
            ->exists();

        if ($alreadyFilled) {
            return redirect()->route('mood.response');
        }

        return view('pages.mood.mood');
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
            'mood' => 'required|string',
        ]);

        $today = Carbon::today();

        $alreadyFilled = Mood::where('user_id', Auth::id())
            ->whereDate('created_at', $today)
            ->exists();

        if ($alreadyFilled) {
            return redirect()->route('mood.response');
        }

        Mood::create([
            'user_id' => Auth::id(),
            'mood' => $request->mood,
        ]);

        return redirect()->route('mood.response');
    }

    public function response()
    {
        return view('pages.mood.mood-response');
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
