<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Models\Profile;
use App\Http\Controllers\Api\ArticleController;






/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostsController::class, 'apiIndex']);

// Route::get('/posts/{id}', [PostsController::class, 'apiShow']);

Route::post('/posts', [PostsController::class, 'apiStore']);

// Route::put('/posts/{id}', [PostsController::class, 'apiUpdate']);

// Route::delete('/posts/{id}', [PostsController::class, 'apiDelete']); // Delete a post

//challenge 4
Route::post('/profiles', [ProfileController::class, 'store']);

Route::get('/profiles', function() {
    return Profile::with('user')->get();
});

Route::post('/users', function(Request $request){
    return User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password)
    ]);
});

Route::get('/users', function() {
    return User::with('profile')->get();
});

Route::get('/users/{id}', function($id) {
    return User::with('profile')->find($id);
});



Route::apiResource('articles', ArticleController::class);




