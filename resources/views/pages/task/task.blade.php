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
        <div class="col-12">
            <div class="card task-card text-white px-3 py-2">
                <div class="card-body row align-items-center">
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <label class="custom-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col">
                        <h5 class="card-title mb-1">Biology</h5>
                        <div>complete missing assignments</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card task-card text-white px-3 py-2">
                <div class="card-body row align-items-center">
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <label class="custom-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col">
                        <h5 class="card-title mb-1">Social Studies</h5>
                        <div>learn chapter 7-11</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card task-card text-white px-3 py-2">
                <div class="card-body row align-items-center">
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <label class="custom-checkbox">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col">
                        <h5 class="card-title mb-1">OWLYPIA</h5>
                        <div>practice for local round</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="modal task-modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addTaskModalLabel">Add Task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="taskName" placeholder="">
                    <label for="taskName">Task Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="taskDescription" placeholder="">
                    <label for="taskDescription">Task Description</label>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>
@endsection