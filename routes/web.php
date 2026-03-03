<?php

use App\Models\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::get('/register', [RegisteredUserController::class, 'create']);

// Route::get('/', fn() => view('ideas.index'));
