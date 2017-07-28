<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except('destroy');
    }
    public function index(){
        return view('sessions.login');
    }
    public function login(){
        
        if(! auth()->attempt(request(['email','password']))){
            return back(); 
        }
        return redirect('/posts');
    }
    public function destroy(){
        auth()->logout();
        return redirect('/posts');
    }
}
