@extends('layouts.app')

@section('title', 'Tasks - MindTrack')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/task.css') }}">
@endsection

@section('pageHeader')
<div class="text-center">
    <h1 class="mb-2">Tasks</h1>
    <h5>Don’t forget, you have promises to keep!</h5>
</div>
@endsection

@section('content')
<div class="px-5">
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <div class="fw-medium">Your task:</div>
        <a href="#" class="btn add-task-btn px-3 py-2" data-bs-toggle="modal" data-bs-target="#addTaskModal">
            <div>Add task</div>
        </a>
    </div>
    <div class="row gy-3">
        @forelse($tasks as $task)
            <div class="col-12">
                <div class="card task-card text-white px-3 py-2">
                    <div class="card-body row align-items-center">
                        <div class="col-1 d-flex justify-content-center align-items-center">
                            <div class="d-flex justify-content-center align-items-center"
                                data-bs-toggle="modal"
                                data-bs-target="#completeModal{{ $task->id }}"
                                style="cursor:pointer">
                                <label class="custom-checkbox">
                                    <input type="checkbox" {{ $task->is_completed ? 'checked disabled' : '' }}>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col">
                            <h5 class="card-title mb-1">{{ $task->name }}</h5>
                            <div>{{ $task->description }}</div>
                        </div>

                    </div>
                </div>
            </div>

            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal confirm-modal fade" id="completeModal{{ $task->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content p-3">
                            <div class="modal-body text-center">
                                <h5>Mark this task as {{ $task->is_completed ? 'incomplete?' : 'complete?' }}</h5>
                                <button type="submit" class="btn btn-primary mt-3">Yes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @empty
            <div class="col-12 text-center py-5">
                <h6 class="text-white-50 mb-2">
                    Your task list is empty for now.
                </h6>
            </div>
        @endforelse
    </div>
</div>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="modal task-modal fade" id="addTaskModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5">Add Task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="taskName" placeholder="">
                        <label>Task Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="taskDescription" placeholder="">
                        <label>Task Description</label>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@if(session('debug_achievement'))
    <div class="px-5">
        <div class="alert alert-info">
            <strong>Debug:</strong> {{ session('debug_achievement') }}
        </div>
    </div>
@endif