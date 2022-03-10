<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
    // quite longer way
// Route::get('/post',[PostController::class,'index']); // get all the data
// Route::get('/post/{id}',[PostController::class,'show']); // get data of a specific id
// Route::post('/post',[PostController::class,'store']); // create new posts
// Route::put('/post/{id}',[PostController::class,'update']); // update  posts
// Route::delete('/post/{id}',[PostController::class,'destroy']); // delete post

// versioning the api
Route::prefix('v1')->group(function(){
    Route::apiResource('/post',PostController::class); // shorter way
});

// create a user
Route::get('/user-create',function(){
    User::create([
        'name' => 'oladayo ahmod',
        'email' => 'oladayoahmod112@gmail.com',
        'password'=>Hash::make('olami')
    ]);
});

// login user
Route::get('/user-login',function(){
    $credentials = request()->only(['email','password']);
    $token = auth()->attempt($credentials);
    return $token;

});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
