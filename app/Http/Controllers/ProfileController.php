<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function store(Request $request)
    {
        // if(count($request->all()) > 0) {

        //    echo('update successful');
    
        // } else {
    
        //     echo('update failed');
        // }
    

        $User = User::find(auth()->user()->id);
        $User->name = $request->name;
        $User->username = $request->username;
        $User->email = $request->email;
        $User->password = Hash::make($request->password);
        $User->save();
    
        return redirect()->route('profile')->with('success', 'update successful!');
    }   
} 