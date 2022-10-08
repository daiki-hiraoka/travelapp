<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class ProfileController extends Controller
{
    function index(User $user) {
        return view('profiles/index')->with(['user' => $user]);    
    }
    
    function edit(User $user) {
        return view('profiles/edit')->with(['user' => $user]);
    }
    
    function update(Request $request, User $user) {
        $input = $request['user'];
        // 画像が保存された時
        if($request->file('image')){
            $image = $request->file('image');
        
            // S3に画像を保存
            $path = Storage::disk('s3')->putFile('/', $image, 'public');
            $input += ['image' => Storage::disk('s3')->url($path)];
        }
        
        $user->fill($input)->save();
        return redirect('/profiles/'.$user->id);
    }
}
