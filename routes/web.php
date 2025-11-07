<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\MoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');
Route::get('/time-me', [TimeController::class, 'index'])->name('time-me');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
Route::get('/mood', [MoodController::class, 'index'])->name('mood');
Route::get('/mood/mood-response', [MoodController::class, 'store'])->name('mood.response');