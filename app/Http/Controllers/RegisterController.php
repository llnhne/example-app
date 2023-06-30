<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show(){
        return view('users.register');
    }
    public function store(Request $request){
        
    }
}
