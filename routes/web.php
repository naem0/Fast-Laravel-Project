<?php

use App\Http\Controllers\NinjaController;
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


