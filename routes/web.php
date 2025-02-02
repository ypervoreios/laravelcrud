<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [PeopleController::class, 'index'])->name('users.index');
Route::get('/users/create', [PeopleController::class, 'create'])->name('users.create');
Route::get('/users/{id}', [PeopleController::class, 'show'])->name('users.show');