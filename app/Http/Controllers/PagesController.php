<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        $name = "Lan Anh";
        $names = [];
        // $names = array('LanAnh', 'Tony', 'John', 'Taylor');
        return view('about',[
            'names' => $names
        ]);
    }
}
