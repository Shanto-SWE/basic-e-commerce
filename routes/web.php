<?php

use Illuminate\Support\Facades\Route;
Use\App\Http\Controllers\userController;
Use\App\Http\Controllers\productController;


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

Route::get('/login', function () {
    return view('login');
});


Route::get('/logout', function () {

    Session::forget('user');
    return redirect('/login');
});


Route::get("/registerpage",[userController::class,'registerpage']);
Route::post("/register",[userController::class,'register']);
Route::post("/login",[userController::class,'login']);
// product
Route::get("/",[productController::class,'index']);
Route::get("/details/{id}",[productController::class,'details']);
Route::post("/add_to_cart",[productController::class,'addToCart']);
Route::get("/cartlist",[productController::class,'cartList']);
Route::get("/removecart/{id}",[productController::class,'removeCart']);
Route::get("/ordernow",[productController::class,'orderNow']);
Route::post("/orderplace",[productController::class,'orderPlace']);
Route::get("/myorders",[productController::class,'myOrders']);
Route::get("/removeorder/{id}",[productController::class,'removeOrder']);