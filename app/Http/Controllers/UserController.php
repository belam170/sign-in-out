<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function logout(){
      auth() -> logout();
      return redirect('/');
    }
    public function login(Request $request){
    $incoming_fields = $request -> validate([
        'loginname' => 'required',
        'loginpassword' => 'required'
    ]);
    if(auth() -> attempt(['name' => $incoming_fields['loginname'],'password' => $incoming_fields['loginpassword']])){
        $request -> session() -> regenerate();
        return redirect('/home');
    }
    else{
        return redirect('/login')->with('error', 'Invalid credentials');
    }
    
    }
    public function register (Request $request){
     $incoming_fields = $request -> validate([
        'name'=>['required','min:3','max:20',Rule::unique('users', 'name')],
        'email'=> ['required'],
        'password' => ['required','min:3']
     ]);
     $incoming_fields['password'] = bcrypt($incoming_fields['password']);
     $user = User::create($incoming_fields);
      auth() -> login($user);

   return redirect ('/login');
    }
}
