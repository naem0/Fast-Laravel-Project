<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use Illuminate\Http\Request;

class DojoController extends Controller
{
    // show all dojo
    public function allDojo()
    {
        // get all the dojo data from Dojo model
        $dojos = Dojo::all();
        return view('dojo.index', compact('dojos')); 
    }

    // show the dojo
    public function showDojo($id)
    {
        // get the dojo data from Dojo model
        $dojo = Dojo::find($id);
        return view('dojo.show', compact('dojo'));
    }

    // destroy dojo
    public function destroyDojo($id)
    {
        // destroy dojo from Dojo model
        $dojo =Dojo::find($id);
        $dojo->forceDelelr();
        return redirect()->route('dojo')->with('success', 'Dojo destroyed successfully!');
    }
}
