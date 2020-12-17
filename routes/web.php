<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OdersController;
use App\Http\Controllers\HomeController;




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
    return view('home');
});
Route::get('trangchu',[
    'as'=>'trangchu',
    'uses'=>'App\Http\Controllers\PagesController@getIndex'
]);
// Route::get('trangchu', 'App\Http\Controllers\PagesController@getIndex');
// Route::get('trangchu', [PagesController::class, 'getIndex']);
Route::get('loaisanpham',[
    'as'=>'loaisanpham',
    'uses'=>'App\Http\Controllers\PagesController@getCategory'
]);
Route::get('detail-product/{id}',[
    'as'=>'detailproduct',
    'uses'=>'App\Http\Controllers\PagesController@getDetailProduct'
]);
Route::get('category/{id}',[
    'as'=>'category',
    'uses'=>'App\Http\Controllers\PagesController@getCategory'
]);
Route::get('contact',[
    'as'=>'contact',
    'uses'=>'App\Http\Controllers\PagesController@getContact'
]);
Route::get('about',[
    'as'=>'about',
    'uses'=>'App\Http\Controllers\PagesController@getAbout'
]);

//phần này dành riêng cho admin
Route::group(['prefix'=>'admin','middleware'=>['App\Http\Middleware\CheckLevel','auth']],function(){
    Route::group(['prefix'=>'category'],function() {                        // route category
        Route::get('list','App\Http\Controllers\CategoryController@getList')->name('catlist');
        Route::get('create', 'App\Http\Controllers\CategoryController@create');
        Route::post('create', 'App\Http\Controllers\CategoryController@store')->name('create'); // ở đây muốn truy cập được vào ROUTE từ controller hay view thì cần đặt định danh cho ROUTE

        Route::get('edit/{id}','App\Http\Controllers\CategoryController@edit');
        Route::post('edit/{id}','App\Http\Controllers\CategoryController@update');
        Route::get('delete/{id}','App\Http\Controllers\CategoryController@delete');

        Route::get('{id}','App\Http\Controllers\CategoryController@show');
    });
    Route::group(['prefix'=>'product'],function() {                         // route product
        Route::get('list','App\Http\Controllers\ProductController@getList');
        Route::get('create', 'App\Http\Controllers\ProductController@create');
        Route::post('create', 'App\Http\Controllers\ProductController@store')->name('create');
        Route::get('edit/{id}','App\Http\Controllers\ProductController@edit');
        Route::post('edit/{id}','App\Http\Controllers\ProductController@update');
        Route::get('delete/{id}','App\Http\Controllers\ProductController@delete');
        Route::get('{id}','App\Http\Controllers\ProductController@show');
    });
    Route::group(['prefix'=>'user'],function() {                         // route product
        Route::get('list','App\Http\Controllers\UsersController@getList')->name('userlist');
        Route::get('{id}','App\Http\Controllers\UsersController@show');
    });


});

//thêm vào giỏ hàng
Route::get('add-to-cart/{id}',[
    'as'=>'addtocart',
    'uses'=>'App\Http\Controllers\PagesController@AddToCart'
]);
Route::get('delete-cart/{id}',[
    'as'=>'deletecart',
    'uses'=>'App\Http\Controllers\PagesController@DelItemCart'
]);

//auth
// Route::get('login',[
//     'as'=>'login',
//     'uses'=>'App\Http\Controllers\PagesController@login'
// ]);
Route::get('login', [PagesController::class, 'login'])->name('login');

// Route::post('login',[
//     'as'=>'login',
//     'uses'=>'App\Http\Controllers\PagesController@postlogin'
// ]);
Route::post('login', [PagesController::class, 'postlogin'])->name('login');
Route::get('register',[
    'as'=>'register',
    'uses'=>'App\Http\Controllers\PagesController@register'
]);
Route::post('register',[
    'as'=>'register',
    'uses'=>'App\Http\Controllers\PagesController@postregister'
]);
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'App\Http\Controllers\PagesController@postLogout'
]);
//endauth


Route::get('search',
    [
        'as'=>'search',
        'uses'=>'App\Http\Controllers\PagesController@getSearch'
    ]);
Route::get('dathang',
    [
        'as'=>'dathang',
        'uses'=>'App\Http\Controllers\OdersController@getCheckOut'
    ])->middleware('auth');
Route::post('dathang',
    [
        'as'=>'dathang',
        'uses'=>'App\Http\Controllers\OdersController@postCheckOut'
    ])->middleware('auth');



Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::get('historybuy',[
//     'as'=>'historybuy',
//     'uses'=>'App\Http\Controllers\PagesController@historybuy'
// ])->middleware('auth');
Route::get('historybuy', [PagesController::class,'historybuy'])->name('historybuy');
Route::get('background/{id}','App\Http\Controllers\UsersController@background')->middleware('auth');
Route::get('changepass/{id}','App\Http\Controllers\UsersController@changepass1')->middleware('auth');
Route::post('changepass/{id}','App\Http\Controllers\UsersController@changepass')->middleware('auth');

