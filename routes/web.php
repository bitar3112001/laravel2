<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test2',function(){
    return view('welcome');
});




Route::get("test6",function(){
    return 'bye';
});

Route::get('test3',function(){
    return 'hello';
});
Route::get("test4",function(){
    return "hhh";
});

Route::get("funcky",function(){
    return "hhh";



Route::get('test3',function(){
    return 'hello';
});

Route::get('ttt',function(){
    return 'dsadas';

});


Route::get("test4",function(){
    return "hhh";
});



