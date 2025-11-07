@extends('layouts.app')

@section('title', 'Home - MindTrack')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
@endsection

@section('pageHeader')
<div class="text-center">
    <h1 class="mb-2">Good Morning</h1>
    <h5>ready to start?</h5>
</div>
@endsection

@section('content')
<div class="px-5">
    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="card quote-card text-white text-center p-3">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Any words to keep you going?</h5>
                            <textarea class="form-control text-center px-3 text-white" placeholder="insert here. . . .  (300 max)" aria-label="With textarea" rows="4"></textarea>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card quote-card text-white text-center p-3">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Quote of the day</h5>
                            <textarea class="form-control text-center px-3 text-white" placeholder="insert here. . . .  (300 max)" aria-label="With textarea" rows="4">Believe you can and you're halfway there.</textarea>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div class="card calendar-card text-white text-center p-3 mt-5">
        <div class="card-body">
            <div id="calendar"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendarModalLabel">Daily Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body custom-list">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Mood:</strong> <span id="moodText">😊 Feeling great!</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Task:</strong> <span id="taskText">Finish project report and team meeting</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Journal:</strong> <span id="journalText">Had a productive day, learned new things!</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Achievement:</strong> <span id="achievementText">Completed coding milestone ahead of time</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js"></script>
<script src="{{ asset('js/home.js') }}"></script>
@endsection