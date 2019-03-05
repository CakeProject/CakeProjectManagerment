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
    return view('welcome');
});
Route::resource('list','CakeController');
Route::resource('cake','PropertyController');
Route::resource('create','PriceandSizeController');

//Route::get('', 'HomeController@myActionName');
// Route::get('master/cart',function()
// {
// 	return view('seller.listCard');
// });
Route::get('/master',function()
{
	return view('layouts.homepage');
});

Route::get('/register',function()
{
	return view('category.register');
});

Route::get('/signup',function()
{
	return view('category.login');
});
Route::get('/customize',function()
{
	return view('category.customize');
});	
// Route::get('/cake/create',function()
// {
// 	return view('seller.upload');
// });

// Route::get('/cake/{session_name()e}/student/{age}',function($tname,$tage)
// {
// 	return "Hello there: ".$tname.'-'.$tage;	
// });


// Route::resource('/product','ProductController');

// Route::get('/test/{id}','Test\TestController@routetesting');

// Route::get('/master',function(){
// 	return view('category.home');
// });
// Route::get('master/seller',function()
// {
// 	return view('category.seller');
// });
// Route::get('master/register',function()
// {
// 	return view('category.register');
// });
// Route::get('/log',function()
// {
// 	return view('category.login');
// });

// Route::get('master/customize',function()
// {
// 	return view('category.customize');
// });
// Route::get('master/home',function()
// {
// 	return view('category.home');
// });
// Route::get('master/user',function()
// {
// 	return view('category.user');
// });


// Auth::routes();
// Auth::user();



// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
