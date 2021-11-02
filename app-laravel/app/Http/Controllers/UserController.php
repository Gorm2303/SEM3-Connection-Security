<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param User $user
     */

    public function check(Request $request, User $user) {
        // Call to DB

        // Doesn't work yet... Look at WEB TECH LESSON 5
        if ($request->username != $user->name || $request->password != $user->password) {
            return redirect()->route('index')->with("denied", "User: ". $request->username. " was denied access");
        }
        return redirect()->route('index')->with("authenticated", "User: ". $user->name. " was authenticated");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function create(Request $request) {
        // Call to DB
        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect()->route('index')->with("success", "User: ". $user->name. " was created succesfully");
    }



}
