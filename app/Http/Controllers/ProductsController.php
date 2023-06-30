<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Laravel Course from Le Lan Anh';
        $x = 1;
        $y = 2;
        // return view('products.index', compact('title', 'x', 'y'));
        $name = 'Lan Anh';
        // return view('products.index')->with('name', $name);
        $myphone = [
            'name' => 'iphone 14',
            'year' => '2022',
            'color' => 'black,white,pupure,yellow',
            'isFavorited' => true
        ];
        // return view('products.index', compact('myphone'));
        // return view('products.index',[
        //     'myphone' => $myphone
        // ]);
        print_r(route('products'));
        return view('products.index');
    }
    public function about(){
        return 'This is About Page';
    }
    public function detail($productName, $id){
        return  "product's name =".$productName.
                " ,product's id =".$id;
        // $phones = [
        //     'iphone 15' => 'iphone 15',
        //     'samsung' => 'samsung'
        // ];
        // return view('products.index',[
        //     'product' => $phones[$productName] ?? 'unknown product'
        // ]);
    }
}
