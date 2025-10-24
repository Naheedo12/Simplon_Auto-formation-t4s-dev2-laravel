<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// chlenge 1
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return ('Bonjour Laravel');
// });
// Route::get('/home', function () {
//     return view('accueil');
// });

// Route::get('/accueil', function () {
//     return view('accueil');
// });

// Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);
// Route::get('/accueil', [App\Http\Controllers\TestController::class, 'show']);


// Route::get('/salutation/{nom}', function ($nom) {
//     return 'Bonjour, '. $nom;
// });

// Route::get('/greet/{prenom}', [App\Http\Controllers\TestController::class, 'greet']);
// Route::get('/profil/{id}/{age}', [App\Http\Controllers\TestController::class, 'profil']);
// Route::get('/article/{id}', [App\Http\Controllers\TestController::class, 'showArticle']);


//challenge 2

Route::redirect('/', 'posts');
Route::resource('posts', PostsController::class);