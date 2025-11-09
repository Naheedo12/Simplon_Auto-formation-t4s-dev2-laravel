<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::redirect('/', 'services');

    Route::resource('services', ServiceController::class);
    Route::resource('bookings', BookingController::class);

    // Route::get('test', function () {
    //     $service = Service::create([
    //         'title' => 'test',
    //         'description' => 'tests',
    //         'duration' => '12:22',
    //         'price' => '342',
    //         'image' => 'images/tests.jpg',
    //     ]);
    //     $booking = $service->Bookings()->create([
    //         'date' => now()->toDateString(),
    //         'time' => '23:33',
    //         'status' => 'tests',
    //     ]);
    // });
});
Route::get('/500', function () {
    abort(500);
});

Route::get('/404', function () {
    abort(404);
});

Route::get('/419', function () {
    abort(419);
});

require __DIR__.'/auth.php';
