<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetController extends Controller
{
    public function show(){
        return view('users.forget');
    }
    public function store(Request $request){
        
    }
}
