<?php

use App\Livewire\ChatSessionSelector;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/chat', ChatSessionSelector::class)->name('chat');
});

require __DIR__.'/auth.php';
