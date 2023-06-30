<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;

class FoodsController extends Controller
{
    /*show list product */
    public function index()
    {
        $foods = Food::all();
        // $foods = Food::where('name', '=', 'shushi')
            // ->firstOrFail();
                // ->get();
        // dd($foods);
        return view('foods.index', [
            'foods' => $foods,
        ]);
    }
    /* create product */
    public function create(){
        $categories = Category::all();
        return view('foods.create')->with('categories',$categories);
    }
    public function store(Request $request){
        // dd('This is store function');
        /* Validation required */
        // dd($request->file('image')->guessExtension());
        // dd($request->file('image')->getSize());
        // dd($request->file('image')->getError());
        // dd($request->file('image')->isValid());
        $request->validate([
            'name' => new Uppercase,
            'count' => 'required|integer|min:0|max:200',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $generatedImageName = 'image'.time().'-'
                                .$request->name.'.'
                                .$request->image->extension();
        $request->image->move(public_path('images'), $generatedImageName);
        /* if the valication is pass, it'll come here */
        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);
        $food->save();
        return redirect('/foods');
    }
    /* show detail product */
    public function show($id){
        // dd('This is show function'.$id);
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        $food->category = $category;
        // dd($food);
        return view('foods.show')->with('food',$food);
    }
    /* update product */
    public function edit($id){
        $food = Food::find($id);
        $category = Category::all();
        // dd($food);
        return view('foods.edit')->with([
            'food' => $food,
            'category' => $category
        ]);
    }
    public function update(Request $request,$id){
        /* Validation required */
        $request->validate([
            'name' => new Uppercase,
            'count' => 'required|integer|min:0|max:200',
            'category_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $generatedImageName = 'image'.time().'-'
                                .$request->name.'.'
                                .$request->image->extension();
        $request->image->move(public_path('images'), $generatedImageName);
        /* if the valication is pass, it'll come here */
        $food = Food::where('id',$id)
                ->update([
                    'name' => $request->input('name'),
                    'count' => $request->input('count'),
                    'description' => $request->input('description'),
                    'category_id' => $request->input('category_id'),
                    'image_path' => $generatedImageName
                ]);
        return redirect('/foods');
    }
    /* delete product */
    public function destroy($id){
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
}
