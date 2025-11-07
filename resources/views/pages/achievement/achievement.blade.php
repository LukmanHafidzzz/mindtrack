@extends('layouts.app')

@section('title', 'Achievement - MindTrack')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/achievement.css') }}">
@endsection

@section('pageHeader')
<div class="text-center">
    <h1 class="mb-2">Achievements</h1>
    <h5>Let’s see how far you’ve come.?</h5>
</div>
@endsection

@section('content')
<div class="px-5">
    <div class="card achievement-bg text-white text-center p-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card achievement-card text-white">
                        <div class="card-body">
                            <i class="bi bi-lightbulb fs-1"></i>
                            <h6 class="card-title">Focus Master!</h6>
                            <p class="card-text fs-7">
                                You stayed focused for an hour straight. That’s some real discipline — impressive!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card achievement-card text-white">
                        <div class="card-body">
                            {{-- dibanding icon, better pake gambar --}}
                            <i class="bi bi-trophy fs-1"></i>
                            <h6 class="card-title">5 day streak!</h6>
                            <p class="card-text fs-7">
                                You’ve opened MINDTRACK for 5 days in a row. Good for you, Ace! Keep shining!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card achievement-card text-white">
                        <div class="card-body">
                            <i class="bi bi-journal-check fs-1"></i>
                            <h6 class="card-title">Journal Starter!</h6>
                            <p class="card-text fs-7">
                                You wrote your first journal entry. Every reflection counts toward growth!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card achievement-card text-white">
                        <div class="card-body">
                            <i class="bi bi-person-arms-up fs-1"></i>
                            <h6 class="card-title">5 day streak!</h6>
                            <p class="card-text fs-7">
                                You’ve opened MINDTRACK for 5 days in a row. Good for you, Ace! Keep shining!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection