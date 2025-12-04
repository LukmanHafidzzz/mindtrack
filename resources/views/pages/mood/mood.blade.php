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
                    <form action="{{ route('mood.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="mood" value="satisfied">
                        <button type="submit" class="btn">
                            <img src="{{ asset('mood/satisfied.png') }}" width="100">
                            <h6 class="text-white mt-2">I'm satisfied</h6>
                        </button>
                    </form>
                </div>

                <div class="col d-flex flex-column justify-content-center pt-5">
                    <form action="{{ route('mood.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="mood" value="content">
                        <button type="submit" class="btn">
                            <img src="{{ asset('mood/content.png') }}" width="100">
                            <h6 class="text-white mt-2">I'm content</h6>
                        </button>
                    </form>
                </div>

                <div class="col d-flex flex-column justify-content-center pb-5">
                    <form action="{{ route('mood.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="mood" value="okay">
                        <button type="submit" class="btn">
                            <img src="{{ asset('mood/okay.png') }}" width="100">
                            <h6 class="text-white mt-2">I'm okay</h6>
                        </button>
                    </form>
                </div>

                <div class="col d-flex flex-column justify-content-center pt-5">
                    <form action="{{ route('mood.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="mood" value="troubled">
                        <button type="submit" class="btn">
                            <img src="{{ asset('mood/troubled.png') }}" width="100">
                            <h6 class="text-white mt-2">I'm troubled</h6>
                        </button>
                    </form>
                </div>

                <div class="col d-flex flex-column justify-content-center pb-5">
                    <form action="{{ route('mood.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="mood" value="dissatisfied">
                        <button type="submit" class="btn">
                            <img src="{{ asset('mood/dissatisfied.png') }}" width="100">
                            <h6 class="text-white mt-2">I'm dissatisfied</h6>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection