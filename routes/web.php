<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Web\Admin\DestinationController;
use App\Http\Controllers\Web\Admin\EventController;
use App\Http\Controllers\Web\Admin\PromotionController;
use App\Http\Controllers\Api\V1\Auth\EmailVerificationController;
use App\Http\Controllers\Api\V1\Auth\NewPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

// Auth
// This route should be named verification.verify
Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify');

Route::get('/reset-password', function(Request $request) {
    $token = $request['token'];
    return view('auth.reset-password', compact('token'));
});
Route::post('/reset-password', [NewPasswordController::class, 'reset']);



// Destinations routes
Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');

Route::get('/destinations/create', [DestinationController::class, 'create'])->name('destinations.create');
Route::post('/destinations', [DestinationController::class, 'store'])->name('destinations.store');


Route::get('/destinations/{id}/edit', [DestinationController::class, 'edit'])->name('destinations.edit');
Route::put('/destinations/{id}', [DestinationController::class, 'update'])->name('destinations.update');

Route::delete('destinations/{id}', [DestinationController::class, 'destroy'])->name('destinations.destroy');

// Events routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');


Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');

Route::delete('events/{id}', [EventController::class, 'destroy'])->name('events.destroy');


// Promotions routes
Route::get('/promotions', [PromotionController::class, 'index'])->name('promotions.index');

Route::get('/promotions/create', [PromotionController::class, 'create'])->name('promotions.create');
Route::post('/promotions', [PromotionController::class, 'store'])->name('promotions.store');


Route::get('/promotions/{id}/edit', [PromotionController::class, 'edit'])->name('promotions.edit');
Route::put('/promotions/{id}', [PromotionController::class, 'update'])->name('promotions.update');

Route::delete('promotions/{id}', [PromotionController::class, 'destroy'])->name('promotions.destroy');
