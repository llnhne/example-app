<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    public function index(){
        // Query Builders
        // $posts = DB::select("SELECT * FROM posts WHERE id=:id;", 
        // [
        //     'id' => 2
        // ]);
        // $posts = DB::table("posts")->where("id", 1);
        $posts = DB::table("posts")
                ->where('id', '=', 5)
                ->delete();
                // ->update([
                //     'title' => 'haha update',
                //     'body' => 'update new'
                // ]);
                    // ->insert([
                    //     'title' => 'haha',
                    //     'body' => 'a new post'
                    // ]);
                    // ->avg('id');
                    // ->sum('id');
                    // ->max('id');
                    // ->count();
                    // ->find(3); //find by id
                    // ->whereNotNull("body")
                    // ->oldest()
                    // ->latest()
                    // ->orderBy('id', 'desc')
                    // ->whereBetween("id", [1,3])
                    // ->where("created_at",">",now()->subDay())
                    // ->orWhere('id', '>', 0)
                    // ->select('body')
                    // ->first();
                    // ->get();
        dd($posts);
        // return view('posts.index');
    }
}
