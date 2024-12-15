<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::middleware(['admin'])->group(function () {

    Route::get('/product-create','ProductController@getCreateProduct')->name('admin.getCreateProduct');
    Route::post('/product-create','ProductController@postCreateProduct')->name('admin.postCreateProduct');
    Route::get('/product-all','ProductController@getAllProduct')->name('admin.getAllProduct');
    Route::get('/update-product','ProductController@getUpdateProduct')->name('admin.getUpdateProduct');
    Route::post('/update-product','ProductController@postUpdateProduct')->name('admin.postUpdateProduct');
    Route::get('/delete-product','ProductController@getDeleteProduct')->name('admin.getDeleteProduct');
    
    Route::get('/category-create','CategoryController@getCreateCategory')->name('admin.getCreateCategory');
    Route::post('/category-create','CategoryController@postCreateCategory')->name('admin.postCreateCategory');
    Route::get('/category-all','CategoryController@getAllCategory')->name('admin.getAllCategory');

});

Route::prefix('admin')->group(function () {


    Route::get('/register','UserController@getRegister')->name('admin.getRegister');
    Route::post('/register','UserController@postRegister')->name('admin.postRegister');
    Route::get('/login','UserController@getLogin')->name('admin.getLogin');
    Route::post('/login','UserController@postLogin')->name('admin.postLogin');

    Route::get('/index','IndexController@getIndex')->name('admin.getIndex');

    Route::get('/category','CategoryController@getCategory')->name('admin.getCategory');
    Route::get('/product','ProductController@getProduct')->name('admin.getProduct');

    Route::get('/login-admin','AdminController@getAdminLogin')->name('admin.getAdminLogin');
    Route::post('/login-admin','AdminController@postAdminLogin')->name('admin.postAdminLogin');
 });