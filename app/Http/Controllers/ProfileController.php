<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::where('user_id', Auth::id())->first();

        return view('pages.profile.profile', compact('profile'));
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
            'grade' => 'required|string|max:255',
            'profile_pic' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $profile = Profile::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'grade' => $request->grade,
            ]
        );

        if ($request->hasFile('profile_pic')) {
            $filename = time() . '_' . $request->file('profile_pic')->getClientOriginalName();

            $request->file('profile_pic')->storeAs('photoProfiles', $filename, 'public');

            $profile->profile_pic = "photoProfiles/" . $filename;
            $profile->save();
        }

        return redirect()->route('home')->with('success', 'Profile updated successfully.');
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
