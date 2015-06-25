<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assignments', function () {
    return view('assignments');
});
Route::get('/assignments/ass1', function () {
    return view('assignments.ass1');
});
Route::get('/assignments/ass2', function () {
    return view('assignments.ass2');
});
Route::get('/assignments/ass3', function () {
    return view('welcome');
});
Route::get('/assignments/ass4', function () {
    return view('assignments');
});
Route::get('/assignments/ass5', function () {
    return view('assignments.ass5');
});
Route::get('/assignments/ass6',function () {
    return view('assignments.ass6');
});


