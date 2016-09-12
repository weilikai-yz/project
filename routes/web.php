<?php

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

Route::get('/admin/login','Admin\LoginController@login');
Route::post('/admin/doLogin','Admin\LoginController@doLogin');
Route::get('/admin/captcha/{tmp}','Admin\LoginController@captcha');


Route::group(["prefix"=>"Admin"],function () {
	Route::get("/logout","Admin\LoginController@logout");
});



// Route::get('/admin',function (){
// 	return view("admin.stu.table");
// });

// Route::get('/add',function (){
// 	return view("admin.stu.add");
// });

// Route::get('/captcha/{tmp}','Admin\CodeController@captcha');




