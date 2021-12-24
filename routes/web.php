<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
    return view('mainPage');
})->middleware(['auth'])->name('mainPage');

require __DIR__.'/auth.php';
//
//
Route::group(['prefix' => 'admin','middleware' => 'is_admin'] , function () {

    Route::get('/admin/create', [ProductsController::class , "create"])->name("Admincreate");

    Route::post("/admin/store", [ProductsController::class ,"store"])->name("adminstore");

    Route::post("/admin/delete/{id}", [ProductsController::class ,"destroy"])->name("admindelete");

    Route::get("/admin/show/{id}", [ProductsController::class ,"show"])->name("adminshow");

    Route::get("/admin/edit/{id}", [ProductsController::class , "edit"])->name("adminedit");

    Route::post("/admin/update", [ProductsController::class , "update"])->name("adminupdate");

});

Route::get('/', [ProductsController::class, 'index'])->name("index");

Route::get('/admin', [ProductsController::class, 'index'])->name("Adminindex");





