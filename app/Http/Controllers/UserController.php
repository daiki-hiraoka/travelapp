<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function index(User $user) {
        return view('users/index')->with(['user' => $user]);    
    }
    
    function edit(User $user) {
        return view('users/edit')->with(['user' => $user]);
    }
}
