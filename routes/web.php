<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Merchant\ordersController;
use App\Http\Controllers\Merchant\categoryController;
use App\Http\Controllers\Merchant\productController;


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
    return view('merchant.homeMerchant');
});

Route::get('/ordersMerchant',         [ordersController::class,'ordersMerchant']);   
Route::get('/categorysMerchant',      [categoryController::class,'categorysMerchant']);   
Route::get('/productsMerchant',       [productController::class,'productsMerchant']);   

Route::get('/login',                  [loginController::class,'login']);  
Route::get('/forgotPassword',         [loginController::class,'forgotPassword']);              
Route::get('/forgotPasswordOTP',      [loginController::class,'forgotPasswordOTP']);   
