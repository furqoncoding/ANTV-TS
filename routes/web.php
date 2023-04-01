<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/req_login', function (Request $request){
    return view('page');
});
Route::post("/req_login", "PageController@req_login");


Route::get('/prog_logout', function (Request $request){
    return view('page');
});
Route::post("/prog_logout", "PageController@prog_logout");


Route::get('/changemenu', function (Request $request){
    return view('page');
});
Route::post("/changemenu", "PageController@changemenu");


Route::get('/insert_INPUTPLANNED', function (Request $request){
    return view('page');
});
Route::post("/insert_INPUTPLANNED", "PageController@insert_INPUTPLANNED");


Route::get('/page', 'PageController@index')->name('page.index');