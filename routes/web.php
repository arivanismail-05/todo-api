<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->file(public_path('todo.html'));
});