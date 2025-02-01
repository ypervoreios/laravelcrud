<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = [
        ["id" => 1, "name" => "John", "email" => "john@example.com", "grade" => 50],
        ["id" => 2,"name" => "Jane", "email" => "jane@example.com", "grade" => 30],
        ["id" => 3,"name" => "Bob", "email" => "bob@example.com", "grade" => 90],   
    ];
    return view('users.index', ["greeting" => "hello", "users" => $users]);
});

Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/users/{id}', function ($id) {
    
    return view('users.show', ["id" => $id]);
});