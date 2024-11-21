<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class, 'home']);
// Route::resource('/booking',BookingController::class);
Route::get('/booking',[BookingController::class,'index'])->name(name: 'booking');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/user',[UserController::class,'index'])->middleware('auth')->name('user');
Route::get('/createroom',[UserController::class,'createroom']);
Route::get('/room',[UserController::class,'room']);
Route::post('/addroom',[UserController::class,'addroom']);
Route::get('/showroom',[UserController::class,'showroom']);
Route::get('/destroy/{id }',[UserController::class,'destroy']);
Route::get('/uproom/{id}',[UserController::class,'uproom']);
Route::post('/editroom/{id}',[UserController::class,'editroom']);
Route::get('/roomdetails/{id}',[HomeController::class,'roomdetails']);
Route::post('/create/{id}',[HomeController::class,'create']);
Route::get('/bookings',[UserController::class,'bookings']);
Route::get('/deletebooking/{id}',[UserController::class,'deletebooking']);
Route::get('/gallary',[UserController::class,'gallary']);
Route::post('/upload',[UserController::class,'upload']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
