<?php

use Illuminate\Support\Facades\Route;

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
// get,put,post,patch,delete,options
//redirect,peramanentRedirect,view,any,match,middle,group
Route::get('/home', function () { //clyser function
    return view('welcome');
});
//Required Route With Parameter
//Route::get('welcome/{name}',function ($name){
// return "Welcome ".$name;
//});

//Optional Route With Parameter
//Route::get('welcome/{name?}',function ($name = "Guest"){
//    return "Welcome ".$name;
//});

//Redirect route temp used in seo case not ranked
//Route::redirect('/','home');

//Redirect route temp
//Route::permanentRedirect('/','home');

//view

Route::view('/','welcome',['name'=>"Arslan"]);
