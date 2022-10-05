<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LikeController extends Controller
{
    public function store($planId) {
        Auth::user()->like($planId);
        return 'ok!';
    }
    
    public function destroy($planId) {
        Auth::user()->unlike($planId);
        return 'ok!';
    }
}
