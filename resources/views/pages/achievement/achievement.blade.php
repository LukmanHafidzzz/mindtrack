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

                @forelse ($achievements as $category => $items)

                    @php
                        $config = config("achievements.categories.$category");
                    @endphp

                    @if ($config)
                        @foreach ($items as $achievement)
                            <div class="col-md-4">
                                <div class="card achievement-card h-100 text-white">
                                    <div class="card-body">
                                        <i class="bi {{ $config['icon'] }} fs-1"></i>
                                        <h6 class="card-title">{{ $config['title'] }}</h6>
                                        <p class="card-text fs-7">
                                            {{ str_replace(':count', $achievement->level, $config['description']) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @empty
                    <div class="col-12 text-center py-5">
                        <h6 class="text-white-50 mb-2">
                            No achievements unlocked yet. Stay consistent and keep going!
                        </h6>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection