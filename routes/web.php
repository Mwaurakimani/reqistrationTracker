<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $heading = "Dashboard";
    return view('dashboard',[
        'heading' => 'Dashboard'
    ]);
});

Route::get('/dashboard', function () {
    $heading = "Dashboard";
    return view('dashboard',[
        'heading' => 'Dashboard'
    ]);
})->middleware(['auth'])->name('dashboard');

Route::get('/Hospital', function () {
    $heading = "Hospital";
    return view('Hospital',[
        'heading' => 'Hospital'
    ]);
})->middleware(['auth'])->name('Hospital');

Route::get('/Entries', function () {
    $heading = "Entries";
    return view('Entries',[
        'heading' => 'Entries'
    ]);
})->middleware(['auth'])->name('Entries');

Route::get('/Administrators', function () {
    $heading = "Administrators";
    return view('Administrators',[
        'heading' => 'Administrators'
    ]);
})->middleware(['auth'])->name('Administrators');












require __DIR__.'/auth.php';
