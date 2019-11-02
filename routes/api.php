<?php

use Illuminate\Http\Request;
// use JWTAuth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');
Route::post('/token', 'AuthController@refresh');

Route::get('/products', 'ProductController@index');
Route::get('/category/list', 'categoryController@list');

Route::post('/category/create', 'categoryController@create');
Route::get('/category/create', 'categoryController@create');

Route::post('/product/set_category', 'categoryController@setCategory');
Route::get('/product/set_category', 'categoryController@setCategory');

Route::get('/s/{term}', 'SearchController@search');
Route::get('/qs/{term}', 'SearchController@quickSearch');

Route::post('add_to_cart/{id}', 'CartController@add_to_cart');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/me', function () {
        $user = JWTAuth::user();
        return $user;
    });

});