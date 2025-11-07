@extends('layouts.app')

@section('title', 'Journals - MindTrack')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/journal.css') }}">
@endsection

@section('pageHeader')
<div class="text-center">
    <h1 class="mb-2">Journals</h1>
    <h5>This is for you and yourself only</h5>
</div>
@endsection

@section('content')
<div class="px-5">
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <div class="fw-medium">Last saved: 07/11/2025</div>
        <a href="#" class="btn journal-btn px-3 py-2">
            <div>Add journal</div>
        </a>
    </div>
    <div class="card journal-bg text-white p-3">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card journal-card text-white">
                        <div class="card-body">
                            <div class="preview-card">
                                <iframe 
                                    src="{{ asset('journals/dummy.pdf') }}" 
                                    frameborder="0">
                                </iframe>
                            </div>
                            <h6 class="card-title mt-3">Project Report Q1</h6>
                            <p class="card-text fs-7">Last modified: 12/06/2025</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card journal-card text-white">
                        <div class="card-body">
                            <div class="preview-card">
                                <iframe 
                                    src="{{ asset('journals/dummy.pdf') }}" 
                                    frameborder="0">
                                </iframe>
                            </div>
                            <h6 class="card-title mt-3">Project Report Q2</h6>
                            <p class="card-text fs-7">Last modified: 12/06/2025</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card journal-card text-white">
                        <div class="card-body">
                            <div class="preview-card">
                                <iframe 
                                    src="{{ asset('journals/dummy.pdf') }}" 
                                    frameborder="0">
                                </iframe>
                            </div>
                            <h6 class="card-title mt-3">Project Report Q3</h6>
                            <p class="card-text fs-7">Last modified: 12/06/2025</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card journal-card text-white">
                        <div class="card-body">
                            <div class="preview-card">
                                <iframe 
                                    src="{{ asset('journals/dummy.pdf') }}" 
                                    frameborder="0">
                                </iframe>
                            </div>
                            <h6 class="card-title mt-3">Project Report Q4</h6>
                            <p class="card-text fs-7">Last modified: 12/06/2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection