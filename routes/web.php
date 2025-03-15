<?php

use App\Http\Controllers\DojoController;
use App\Http\Controllers\NinjaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninja', [NinjaController::class, "allNinja"] )->name('ninja'); ;

Route::get('/ninja/{id}', [NinjaController::class, "showNinja"] )->name('ninja.show');

// Show the form
Route::get('/add-ninja', [NinjaController::class, "showForm"])->name('ninja.form');

// Handle form submission
Route::post('/add-ninja', [NinjaController::class, "addNinja"])->name('ninja.add');

// Destroy ninja
Route::delete('/ninja/{id}', [NinjaController::class, "destroyNinja"])->name('ninja.destroy');

// Show the edit form
Route::get('/ninja/{id}/edit', [NinjaController::class, "showEditForm"])->name('ninja.edit');

// Handle edit form submission
Route::put('/ninja/{id}', [NinjaController::class, "updateNinja"])->name('ninja.update');

// Show all users
Route::get('/users', [UserController::class, "allUser"])->name('users');

// Show the user
Route::get('/user/{id}', [UserController::class, "showUser"])->name('users.show');

// Show the add user form
Route::get('/add-user', [UserController::class, "showForm"])->name('user.form');

// Handle form submission
Route::post('/add-user', [UserController::class, "addUser"])->name('user.add');

// Destroy user
Route::delete('/user/{id}', [UserController::class, "destroyUser"])->name('user.destroy');

// Show the edit form
Route::get('/user/{id}/edit', [UserController::class, "showEditForm"])->name('user.edit');

// Handle edit form submission
Route::put('/user/{id}', [UserController::class, "updateUser"])->name('user.update');



// show all dojo
Route::get('/dojos', [DojoController::class, "allDojo"])->name('dojos');

// show the dojo
Route::get('/dojo/{id}', [DojoController::class, "showDojo"])->name('dojos.show');

// distroy dojo
Route::delete('/dojo/{id}', [DojoController::class, "destroyDojo"])->name('dojos.destroy');
