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

//dash board redirect
Route::get('/', function () {
    $heading = "Dashboard";
    return view('auth.SignIn', [
        'heading' => 'Dashboard'
    ]);
});



require __DIR__ . '/navigation.php';




require __DIR__ . '/admin.php';



require __DIR__ . '/auth.php';
