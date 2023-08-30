<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule as RuleRule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function loginStore()
    {
    $cleanData = request()->validate([
        'email' =>['required','email',Rule::exists('users','email')],
        'password'=>['required','min:4']
    ],[
        'email.exist'=>'User does not exist'
    ]);
    if (auth()->attempt($cleanData)){
        return redirect('/')->with('success', 'welcome back' . auth()->user()->name);
    } else{
        return back()->withErrors([
            'email'=>'your email is wrong reenter'
        ]);
    }
    
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
       auth()->login($user);
    return redirect('/')->with('success','Welcome to creativeCoder'.$user->name);
 }
 public function logout(){
    auth()->logout();
    return redirect('/')->with('success','goodbye');
 }
}