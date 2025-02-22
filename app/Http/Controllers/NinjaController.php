<?php

namespace App\Http\Controllers;

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
        $ninjas = User::all();

        // Return the view with the ninja data
        return view('ninja.index', compact('ninjas'));
    }

    public function showNinja($id) : View
    {
        // get the ninja data from database user table
        // $ninja = DB::table('users')->where('id', $id)->first();

        // get the ninja data from User model
        $ninja = User::find($id);

        // Return the view with the ninja data
        return view('ninja.show', compact('ninja'));
    }

  // Show the add ninja form
    public function showForm(): View
    {
        return view('ninja.add');
    }

    // Handle form submission
    public function addNinja(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);

        try {
            $ninja = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Hashing password
                'phone' => $request->phone,
                'status' => $request->has('status') ? 1 : 0, // Handling checkbox
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
        $ninja = User::find($id);

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
        $ninja = User::find($id);

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
