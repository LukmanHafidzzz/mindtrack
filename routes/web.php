<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\MoodController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');

    Route::get('/calendar/details', [HomeController::class, 'getDayDetails']);
    Route::get('/calendar/details', [HomeController::class, 'getDayDetails']);

    Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');

    Route::get('/time-me', [TimeController::class, 'index'])->name('time-me');
    Route::post('/time-records', [TimeController::class, 'store'])->name('time.store');

    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
    Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');

    Route::get('/mood', [MoodController::class, 'index'])->name('mood');
    Route::post('/mood', [MoodController::class, 'store'])->name('mood.store');
    Route::get('/mood/mood-response', [MoodController::class, 'response'])->name('mood.response');

    Route::get('/journals', [JournalController::class, 'index'])->name('journal');
    Route::post('/journals', [JournalController::class, 'store'])->name('journals.store');
});

require __DIR__ . '/auth.php';
