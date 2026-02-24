<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', fn() => view('welcome'));

Route::get('/ideas', fn() => view('ideas.index'));
