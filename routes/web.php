<?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpeakerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// routes/web.php




Route::get('/speakers', [SpeakerController::class, 'index'])->name('speakers.index');
Route::post('/stores', [SpeakerController::class, 'store'])->name('speakers.store');
Route::post('/create', [SpeakerController::class, 'create'])->name('speakers.create');
Route::post('/edits', [SpeakerController::class, 'edit'])->name('speakers.edit');
Route::get('/speakers/{id}/edit', [SpeakerController::class, 'edit'])->name('speakers.edit');
Route::delete('/speakers/{id}', [SpeakerController::class, 'destroy'])->name('speakers.destroy');
Route::get('/crears', [SpeakerController::class, 'create'])->name('speakers.create');
Route::put('/speakers/{id}', [SpeakerController::class, 'update'])->name('speakers.update');








Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::post('/store', [EventController::class, 'store'])->name('events.store');
Route::post('/create', [EventController::class, 'create'])->name('events.create');
Route::get('/crear', [EventController::class, 'create'])->name('events.create');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
