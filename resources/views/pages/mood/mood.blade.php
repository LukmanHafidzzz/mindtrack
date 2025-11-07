@extends('layouts.app')

@section('title', 'Mood - MindTrack')

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
    <div class="card mood-bg text-white text-center p-3">
        <h4>Thank you for sharing with us!</h4>
        <div class="container text-center h-100">
            <div class="row align-items-stretch h-100">
                <div class="col d-flex flex-column justify-content-center pb-5">
                    <a type="button" class="btn" href="{{ route('mood.response') }}">
                        <img src="{{ asset('mood/satisfied.png') }}" alt="satisfied" width="100">
                        <h6 class="text-white mt-2">I'm satisfied</h6>
                    </a>
                </div>
                <div class="col d-flex flex-column justify-content-center pt-5">
                    <a type="button" class="btn" href="{{ route('mood.response') }}">
                        <img src="{{ asset('mood/content.png') }}" alt="content" width="100">
                        <h6 class="text-white mt-2">I'm content</h6>
                    </a>
                </div>
                <div class="col d-flex flex-column justify-content-center pb-5">
                    <a type="button" class="btn" href="{{ route('mood.response') }}">
                        <img src="{{ asset('mood/okay.png') }}" alt="okay" width="100">
                        <h6 class="text-white mt-2">I'm okay</h6>
                    </a>
                </div>
                <div class="col d-flex flex-column justify-content-center pt-5">
                    <a type="button" class="btn" href="{{ route('mood.response') }}">
                        <img src="{{ asset('mood/troubled.png') }}" alt="troubled" width="100">
                        <h6 class="text-white mt-2">I'm troubled</h6>
                    </a>
                </div>
                <div class="col d-flex flex-column justify-content-center pb-5">
                    <a type="button" class="btn" href="{{ route('mood.response') }}">
                        <img src="{{ asset('mood/dissatisfied.png') }}" alt="dissatisfied" width="100">
                        <h6 class="text-white mt-2">I'm dissatisfied</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection