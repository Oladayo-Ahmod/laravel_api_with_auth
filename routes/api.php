<?php

use App\Http\Controllers\PostController;
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

// Route::get('/post',[PostController::class,'index']); // get all the data
// Route::get('/post/{id}',[PostController::class,'show']); // get data of a specific id
// Route::post('/post',[PostController::class,'store']); // create new posts
// Route::put('/post/{id}',[PostController::class,'update']); // update  posts
// Route::delete('/post/{id}',[PostController::class,'destroy']); // delete post

Route::resource('/post',PostController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
