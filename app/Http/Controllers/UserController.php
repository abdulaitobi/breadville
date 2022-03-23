<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{ 
    public function __construct()
    {
        // $this->middleware(['guest']);
    }

    public function index()
    {
        $users = User::latest()->paginate(20);

        return view('users.index', [
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
            'staff' => 'required'
        ]);

        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'staff' => $request->input('staff')
        ]);

        //auth()->attempt($request->only('email', 'password'));

        return redirect()->route('users');
    } 
    public function destroy(User $user)
    {
        // $this->authoriza('delete', $customer);
        
        $user->delete();

        return redirect()->route('users')->with('success', 'User deleted');
    }
}
