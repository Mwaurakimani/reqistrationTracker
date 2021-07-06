<?php


use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


//Administrator Routes
Route::get('/Administrators', [
AdminController::class, 'get_all'
])->middleware(['auth'])
->name('Administrators');

Route::get('/Administrators/{id}', [
AdminController::class, 'show']
)->middleware(['auth'])
->name('Administrators.user');

Route::get('/Administrators/create', [
AdminController::class, 'create'
])->middleware(['auth'])
->name('Administrators.userForm');

Route::put('/Administrators/{id}', [
AdminController::class, 'store'
])->middleware(['auth'])
->name('Administrators.userForm');

Route::post('/Administrators/create', [
AdminController::class, 'store'
])->middleware(['auth'])
->name('Administrators.userForm');

Route::delete('/Administrators/{id}', [
AdminController::class, 'store'
])->middleware(['auth'])
->name('Administrators.userForm');
