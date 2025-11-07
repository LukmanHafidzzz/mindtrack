@extends('layouts.app')

@section('title', 'Dashboard')

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
    {{-- <div class="card quote-card text-white text-center p-3">
        <div class="card-body">
            <h5 class="card-title mb-3">Any words to keep you going?</h5>
            <textarea class="form-control text-center text-white" placeholder="insert here. . . .  (300 max)" aria-label="With textarea" rows="4"></textarea>
        </div>
    </div> --}}
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
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('.splide', {
        type: 'loop',
        perPage: 1,
        pagination: false,
        }).mount();
    });
</script>
@endsection