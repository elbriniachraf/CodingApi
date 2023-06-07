<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('register', 'App\Http\Controllers\AuthController@register');


Route::apiResource('products', ProductController::class);
Route::get('/products/search', 'App\Http\Controllers\ProductController@search');


Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('logout', 'App\Http\Controllers\AuthController@logout');
    Route::get('user', 'App\Http\Controllers\AuthController@user');

});
