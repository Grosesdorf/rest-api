<?php

use Illuminate\Http\Request;

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

// GET /users           | index
// GET /users/{user}    | show
// POST /users          | store
// DELETE /users/{user} | destroy

Route::resource('users', 'Api\UserController')
    ->only(['index', 'show', 'store', 'destroy']);

// GET /posts           | index

Route::resource('posts', 'Api\PostController')
    ->only(['index']);

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
