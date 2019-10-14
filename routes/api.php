<?php

use Illuminate\Http\Request;
use JWTAuth;

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

Route::get('/products', function () {
    return App\Product::paginate(120);
});

Route::post('add_to_cart/{id}', 'CartController@add_to_cart');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/me', function () {
        $user = JWTAuth::user();
        return $user;
    });

});