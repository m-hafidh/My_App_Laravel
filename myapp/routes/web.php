<?php

use Illuminate\Support\Facades\Route;

// La route pour afficher la page welcome sur la view
Route::get('/', function () {
    return view('welcome');
});

// LA route pour afficher la page projects sur view
Route::get('/', function () {
    return view('projects');
});

