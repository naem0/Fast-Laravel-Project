<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function allUser() : View
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function showUser($id) : View
    {
        $user = User::find($id);
        return view('user.show', compact('user'));
    }

  // Show the add user form
    public function showForm(): View
    {
        return view('user.add');
    }

    // Handle form submission
    public function addUser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
            'phone' => ['nullable', 'string', 'max:20'],
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Hashing password
                'phone' => $request->phone ?? '',
                'status' => $request->has('status') ? 1 : 0, // Handling checkbox
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to add user: ' . $e->getMessage()]);
        }

        return redirect()->route('user.form')->with('success', 'user added successfully!');
    }

    // destroy user
    public function destroyUser($id)
    {
        // get the user data from database user table
        // $user = DB::table('users')->where('id', $id)->first();

        // get the user data from User model
        $user = User::find($id);

        // destroy the user
        $user->forceDelete();

        // Return the view with the user data
        return redirect()->route('user')->with('success', 'user destroyed successfully!');
    }

    // showEditForm
    public function showEditForm($id)
    {
        // get the user data from database user table
        // $user = DB::table('users')->where('id', $id)->first();

        // get the user data from User model
        $user = User::find($id);

        // Return the view with the user data
        return view('user.edit', compact('user'));
    }

    // update user
    public function updateUser(Request $request, $id)
    {
        // get the user data from database user table
        // $user = DB::table('users')->where('id', $id)->first();

        // get the user data from User model
        $user = User::find($id);

        // update the user
        $user->update($request->all());

        // Return the view with the user data
        return redirect()->route('user')->with('success', 'user updated successfully!');
    }
}
