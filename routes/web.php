<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::get('/',[PagesController::class, 'index']);
Route::get('/about',[PagesController::class, 'about']);
Route::get('/posts',[PostsController::class, 'index']);
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/forget', [ForgetController::class, 'show']);


Route::resource('/foods', FoodsController::class);



// Route::get('/products',[
//     ProductsController::class,
//     'index'
// ])->name('products');
// Route::get('/about',[
//     ProductsController::class,
//     'about'
// ]);
// Route::get('/products/{productName}/{id}',[
//     ProductsController::class,
//     'detail'
// ])->where([
//     'productName' => '[a-zA-Z0-9]+',
//     'id'=>'[0-9]+'
// ]);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/trangchu', function () {
//     return env('MY_NAME');
// });
// Route::get('/users', function () {
//     return 'this is the user page';
// });
// Route::get('/foods', function(){
//     return ['shushi', 'sashimi', 'tofu'];
// });
// Route::get('/about', function(){
//     return response()->json([
//         'name' => 'Le Lan Anh',
//         'email' => 'anhllph19505@fpt.edu.vn'
//     ]);
// });
// Route::get('something', function(){
//     return redirect('/foods');
// });

// Route::get('/', function(){
//     return view('home');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
