<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

 public function store(){
    $cleanData=request()->validate(
        [
            'name'=>['required'],
            'email'=>['required',Rule::unique('users','username')],
            'username'=>['required',Rule::unique('users','username')],
            'password'=>['required','min:6','max:12'],
            // 'address'=>['required'],
            // 'profile_url'=>['required'],
            
        ] );
        // $cleanData['password'] =bcrypt($cleanData['password']);
       $user = User::create($cleanData);
    return redirect('/')->with('success','Welcome to creativeCoder'.$user->name);
 }
}