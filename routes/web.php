<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
});

Route::get('/dashboard', function () {
    $user = auth()->user();

    $tasks = $user->tasks()->latest()->take(10)->get();
    $totalTasks = $user->tasks()->count();
    $pendingTasks = $user->tasks()->where('status', 'pending')->count();
    $completedTasks = $user->tasks()->where('status', 'done')->count();

    return view('dashboard', compact('tasks', 'totalTasks', 'pendingTasks', 'completedTasks'));
})->middleware(['auth', 'verified'])->name('dashboard');
 