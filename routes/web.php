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

Route::get('/', function () {
    return view ("welcome");

});

Route::get('meet1', function () {
    return view("meet1");
});

Route::get('meet2', function () {
    return view("meet2");
});

Route::get('meet3', function () {
    return view("meet3");
});

Route::get('meet3-1', function () {
    return view("meet3-1");
});

Route::get('meet3-2', function () {
    return view("meet3-2");
});

Route::get('meet3-3', function () {
    return view("meet3-3");
});

Route::get('meet3-4', function () {
    return view("meet3-4");
});

Route::get('meet4', function () {
    return view("meet4");
});

Route::get('meet5-1', function () {
    return view("meet5-1");
});

Route::get('meet5-2', function () {
    return view("meet5-2");
});

Route::get('meet6', function () {
    return view("meet6");
});

Route::get('meet7', function () {
    return view("meet7");
});


Route::get('perkalian', 'App\Http\Controllers\DosenController@index');






