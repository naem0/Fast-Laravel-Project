<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninja', [NinjaController::class, "allNinja"] );

Route::get('/ninja/{id}', function ($id) {
    // Ninja Damo data array of objects with name, id, status, skill, and weapon
    $ninjas = [
        (object) ['name' => 'Damo', 'id' => 1, 'status' => true, 'skill' => 'Ninjutsu', 'weapon' => 'Katana'],
        (object) ['name' => 'Koji', 'id' => 2, 'status' => true, 'skill' => 'Ninjutsu', 'weapon' => 'Kunai'],
        (object) ['name' => 'Kara', 'id' => 3, 'status' => false, 'skill' => 'Ninjutsu', 'weapon' => 'Shuriken'],
        (object) ['name' => 'Jigen', 'id' => 4, 'status' => true, 'skill' => 'Ninjutsu', 'weapon' => 'Kunai'],
        (object) ['name' => 'Kawaki', 'id' => 5, 'status' => true, 'skill' => 'Ninjutsu', 'weapon' => 'Katana'],
        (object) ['name' => 'Sarada', 'id' => 6, 'status' => false, 'skill' => 'Ninjutsu', 'weapon' => 'Shuriken'],
        (object) ['name' => 'Boruto', 'id' => 7, 'status' => false, 'skill' => 'Ninjutsu', 'weapon' => 'Kunai'],
        (object) ['name' => 'Mitsuki', 'id' => 8, 'status' => true, 'skill' => 'Ninjutsu', 'weapon' => 'Katana'],
        (object) ['name' => 'Konohamaru', 'id' => 9, 'status' => true, 'skill' => 'Ninjutsu', 'weapon' => 'Kunai'],
        (object) ['name' => 'Sasuke', 'id' => 10, 'status' => true, 'skill' => 'Ninjutsu', 'weapon' => 'Katana'],
    ];

    // Find the ninja with the id
    $ninja = collect($ninjas)->firstWhere('id', $id);

    // Return the view with the ninja data
    return view('ninja.show', compact('ninja'));
});
