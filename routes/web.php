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
    return view('welcome');
});


Route::get('/first_name', function () {
    return 'Luka';

});


Route::get('/last_name', function () {
    return 'Lortkipanidze';
});


Route::get('/age', function () {
    return '21';
});


Route::get('/hobby', function () {
    return 'Playing football';
});


Route::get('/job', function () {
    return 'Software Engineer';
});
