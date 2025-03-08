<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Models\Ninja;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Http\Request;
// use Mockery\Matcher\Any;

class NinjaController extends Controller
{
    public function allNinja() : View
    {

        // get the ninjas data from database user table
        // $ninjas = DB::table('users')->where('user_type', 4)->whereNotNull('name')->where('name', '!=', '')->orderByDesc('id')->get();

        // get all the ninja data from User model
        $ninjas = Ninja::all();

        // Return the view with the ninja data
        return view('ninja.index', compact('ninjas'));
    }

    public function showNinja($id) : View
    {
        // get the ninja data from database user table
        // $ninja = DB::table('users')->where('id', $id)->first();

        // get the ninja data from User model
        $ninja = Ninja::find($id);

        // Return the view with the ninja data
        return view('ninja.show', compact('ninja'));
    }

  // Show the add ninja form
    public function showForm(): View
    {
        $dojos = Dojo::all();
        return view('ninja.add', compact('dojos'));
    }

    // Handle form submission
    public function addNinja(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'rank' => ['required', 'string', 'max:255'],
            'bio' => ['required', 'string'],
            'dojo_id' => ['required', 'integer'],
        ]);

        try {
            $ninja = Ninja::create([
                'name' => $request->name,
                'rank' => $request->rank,
                'bio' => $request->bio,
                'dojo_id' => $request->dojo_id,
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to add ninja: ' . $e->getMessage()]);
        }

        return redirect()->route('ninja.form')->with('success', 'Ninja added successfully!');
    }

    // destroy ninja
    public function destroyNinja($id)
    {
        // get the ninja data from database user table
        // $ninja = DB::table('users')->where('id', $id)->first();

        // get the ninja data from User model
        $ninja = Ninja::find($id);

        // destroy the ninja
        $ninja->forceDelete();

        // Return the view with the ninja data
        return redirect()->route('ninja')->with('success', 'Ninja destroyed successfully!');
    }

    // showEditForm
    public function showEditForm($id)
    {
        // get the ninja data from database user table
        // $ninja = DB::table('users')->where('id', $id)->first();

        // get the ninja data from User model
        $ninja = Ninja::find($id);

        // Return the view with the ninja data
        return view('ninja.edit', compact('ninja'));
    }

    // update ninja
    public function updateNinja(Request $request, $id)
    {
        // get the ninja data from database user table
        // $ninja = DB::table('users')->where('id', $id)->first();

        // get the ninja data from User model
        $ninja = User::find($id);

        // update the ninja
        $ninja->update($request->all());

        // Return the view with the ninja data
        return redirect()->route('ninja')->with('success', 'Ninja updated successfully!');
    }
    
}
