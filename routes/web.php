<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

        //Laravel before 8 (Old, not gonna work in 8)
//Route::get('/products', 'ProductsController@index');
        //Laravel 8 (New)
        // in the [], it's saying perform the function 'index' inside ProductsController
Route::get('/products', [ProductsController::class, 'index']);
        //Laravel 8 (also New) same as above
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// send back a json object like this
// Route::get('/users', function(){
//     return response()->json([
//         'name' => 'Sandy',
//         'course' => 'beginner crashcourse'
//     ]);
// });

// //redirect like this
// Route::get('/users', function(){
//     return redirect("/");
// });
