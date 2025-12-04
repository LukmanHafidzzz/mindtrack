@extends('layouts.app')

@section('title', 'Profile - MindTrack')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('pageHeader')
<div class="text-center">
    <h1 class="mb-2">Profile</h1>
    <h5>Edit your personal information</h5>
</div>
@endsection

@section('content')
<div class="px-5">
    <div class="card profile-bg text-white p-3">
        <div class="card-body">
            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grade-field mb-4">
                    <label class="placeholder-option">Grade</label>
                    <select name="grade" class="form-select mt-2 py-2 grade-select">
                        <option disabled {{ !$profile ? 'selected' : '' }} class="placeholder-option">
                            Choose grade
                        </option>

                        <option value="7"  {{ (isset($profile) && $profile->grade == '7')  ? 'selected' : '' }}>7th Grade</option>
                        <option value="8"  {{ (isset($profile) && $profile->grade == '8')  ? 'selected' : '' }}>8th Grade</option>
                        <option value="9"  {{ (isset($profile) && $profile->grade == '9')  ? 'selected' : '' }}>9th Grade</option>
                        <option value="10" {{ (isset($profile) && $profile->grade == '10') ? 'selected' : '' }}>10th Grade</option>
                        <option value="11" {{ (isset($profile) && $profile->grade == '11') ? 'selected' : '' }}>11th Grade</option>
                        <option value="12" {{ (isset($profile) && $profile->grade == '12') ? 'selected' : '' }}>12th Grade</option>
                    </select>
                </div>

                <div class="mb-4 photo-file-wrapper">
                    <div class="form-label">Profile Picture</div>
                    <div class="profile-pic-wrapper mb-2">
                        @if(isset($profile->profile_pic))
                            <img src="{{ asset('storage/' . $profile->profile_pic) }}" alt="Profile image">
                        @else
                            <span class="no-image-text">No Image</span>
                        @endif
                    </div>
                    <label class="photo-file-btn">
                        <span>Select Profile Picture</span>
                        <input
                            type="file"
                            name="profile_pic"
                            class="photo-file-input"
                            accept="image/*"
                            onchange="this.previousElementSibling.innerText = this.files[0].name">
                    </label>
                </div>

                <button type="submit" class="btn save-btn">Save Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection