@extends('layouts.app')

@section('title', 'Tasks - MindTrack')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/mood.css') }}">
@endsection

@section('pageHeader')
<div class="text-center">
    <h1 class="mb-2">Mood</h1>
    <h5>How are you feeling now?</h5>
</div>
@endsection

@section('content')
<div class="px-5">
    <div class="card mood-bg text-white p-3">
        <div class="h-100 d-flex flex-column justify-content-center align-items-center">
            <h4>Thank you for sharing with us!</h4>
            <img src="{{ asset('mood/hands-holding-heart.png') }}" alt="" srcset="" class="w-25">
            <h6>we hope to support you the best we can, keep up your flow!</h6>
        </div>
    </div>
</div>
@endsection