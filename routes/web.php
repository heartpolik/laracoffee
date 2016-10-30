<?php
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products','ProductController');

Route::get('user', 'UserController@index');
//Route::get('product',function(){
//
//
//
//    foreach ($products as $product){
//        echo $product->name.'<br>  Created at: '.date('D', $product->created_at = time()).'<br>';
//        echo $product->price.'<br><br>';
//    }
//
//});
//Route::get('products','ProductController@index');
//
//Route::get('products/show/{id}', ['as' => 'product.show','uses'=>'ProductController@show']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
