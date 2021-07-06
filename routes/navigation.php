<?php

use Illuminate\Support\Facades\Route;

//dash board redirect
Route::get('/', function () {
    $heading = "Dashboard";
    return view('auth.SignIn', [
        'heading' => 'Dashboard'
    ]);
});

//main dashboard Route
Route::get('/dashboard', function () {
    $heading = "Dashboard";
    return view('dashboard', [
        'heading' => 'Dashboard'
    ]);
})->middleware(['auth'])
    ->name('dashboard');


//hospital Routes
Route::get('/Hospital', function () {
    $heading = "Hospital";
    return view('Hospital', [
        'heading' => 'Hospital'
    ]);
})->middleware(['auth'])
    ->name('Hospital');



//entries Routes
Route::get('/Entries', function () {
    $heading = "Entries";
    return view('Entries', [
        'heading' => 'Entries'
    ]);
})->middleware(['auth'])
    ->name('Entries');


