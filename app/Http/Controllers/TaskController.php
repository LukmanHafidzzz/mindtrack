<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\AchievementService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())
            ->where(function ($q) {
                $q->where('is_completed', 0)
                ->orWhereDate('updated_at', now()->toDateString());
            })
            ->get();

        return view('pages.task.task', compact('tasks'));
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
            'taskName' => 'required',
        ]);

        Task::create([
            'user_id' => Auth::id(),
            'name' => $request->taskName,
            'description' => $request->taskDescription,
        ]);

        return redirect()->back()->with('success', 'Task added!');
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
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        if ($task->user_id !== Auth::id()) {
            abort(403);
        }

        $task->is_completed = !$task->is_completed;
        $task->save();

        if ($task->is_completed) {
            $completedCount = Task::where('user_id', Auth::id())
                ->where('is_completed', true)
                ->count();

            AchievementService::check(
                Auth::id(),
                'task',
                $completedCount
            );
        }

        return redirect()->back()->with('success', 'Task updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
