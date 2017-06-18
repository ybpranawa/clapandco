<?php

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
    return view('homepage');
});
Route::get('home', function () {
    return view('homepage');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/login',function(){
    return view('login');
});

Route::get('/logout', 'AccountController@logout');
Route::get('/profile', function(){
    return view('personal/profile');
});
Route::get('/dashboard',function(){
    return view('personal/dashboard');
});
/*Route::get('/catalog',function(){
    return view('personal/catalog');
});*/
Route::get('/catalog','ProductController@getcatalog');
Route::get('/removeproduct','ProductController@removeproduct');
Route::get('/addproduct', 'ProductController@addproduct');
Route::get('/orderlist','ProductController@orderlist');
Route::get('/editproduct','ProductController@editproduct');

Route::post('/insertregister','AccountController@register');
Route::post('/dologin','AccountController@login');
Route::post('/doupload','ProductController@doupload');