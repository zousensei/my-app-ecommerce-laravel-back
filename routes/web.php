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

Route::get('/ordersMerchant',                [ordersController::class,'ordersMerchant']);   
Route::get('/ordersDetailMerchant',          [ordersController::class,'ordersDetailMerchant']);   
Route::get('/ordersSentMerchant',            [ordersController::class,'ordersSentMerchant']);   
 
Route::get('/categorysMerchant',             [categoryController::class,'categorysMerchant']);   
Route::post('/addCategorysMerchant',         [categoryController::class,'addCategorysMerchant']);   
Route::post('/updateCategorysMerchant/{id}', [categoryController::class,'updateCategorysMerchant']);   
Route::get('/delCategorysMerchant/{id}',     [categoryController::class,'delCategorysMerchant']);   

Route::get('/productsMerchant/{id}',         [productController::class,'productsMerchant']);   
Route::post('/addProductsMerchant',          [productController::class,'addProductsMerchant']);   
Route::post('/updateProductsMerchant/{id}',  [productController::class,'updateProductsMerchant']);   
Route::post('/delProductMerchant/{id}',      [productController::class,'delProductMerchant']);   

Route::get('/login',                         [loginController::class,'login']);  
Route::get('/forgotPassword',                [loginController::class,'forgotPassword']);              
Route::get('/forgotPasswordOTP',             [loginController::class,'forgotPasswordOTP']);   
