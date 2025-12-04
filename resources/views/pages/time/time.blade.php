@extends('layouts.app')

@section('title', 'Time Me - MindTrack')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/time.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('pageHeader')
<div class="text-center">
    <h1 class="mb-2">Time Me</h1>
    <h5>Stay on track, or challenge yourself.</h5>
</div>
@endsection

@section('content')
<div class="px-5">
    <div class="card time-card text-white text-center p-4">
        <div class="card-body">

            <ul class="nav nav-tabs justify-content-center mb-4 custom-tabs">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#timer">
                        ⏲ Timer
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#stopwatch">
                        ⏱ Stopwatch
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                {{-- TIMER --}}
                <div id="timer" class="tab-pane fade show active">
                    <div class="d-flex justify-content-center gap-2 mb-3">
                        <input type="number" id="input-hours" class="form-control form-control-sm custom-input w-25" placeholder="hours" min="0">
                        <input type="number" id="input-minutes" class="form-control form-control-sm custom-input w-25" placeholder="minutes" min="0">
                        <input type="number" id="input-seconds" class="form-control form-control-sm custom-input w-25" placeholder="seconds" min="0">
                    </div>

                    <button id="set-timer" class="btn custom-btn btn-sm mb-3">Set</button>

                    <div id="timer-display" class="display-5 mb-3">00:00:00</div>

                    <div class="d-flex justify-content-center gap-2">
                        <button id="start-timer" class="btn custom-btn btn-sm">Start</button>
                        <button id="pause-timer" class="btn custom-btn btn-sm">Pause</button>
                        <button id="reset-timer" class="btn custom-btn btn-sm">Reset</button>
                    </div>
                </div>

                {{-- STOPWATCH --}}
                <div id="stopwatch" class="tab-pane fade">
                    <div id="stopwatch-display" class="display-5 mb-3">00:00:00</div>

                    <div class="d-flex justify-content-center gap-2">
                        <button id="start-stopwatch" class="btn custom-btn btn-sm">Start</button>
                        <button id="pause-stopwatch" class="btn custom-btn btn-sm">Pause</button>
                        <button id="reset-stopwatch" class="btn custom-btn btn-sm">Reset</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/time.js') }}"></script>
@endsection
