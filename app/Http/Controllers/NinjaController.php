<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
// use Illuminate\Http\Request;
// use Mockery\Matcher\Any;

class NinjaController extends Controller
{
    public function allNinja() : View
    {
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

        // Return the view with the ninjas data
        return view('ninja.index', compact('ninjas'));
        
    }

    
}
