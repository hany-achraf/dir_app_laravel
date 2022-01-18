<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Auth\EmailVerificationController;
use App\Http\Controllers\Api\V1\Auth\NewPasswordController;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\DestinationController;
use App\Http\Controllers\Api\V1\BusinessController;
use App\Http\Controllers\Api\V1\PhotoController;
use App\Http\Controllers\Api\V1\ReviewController;
use App\Http\Controllers\Api\V1\PromotionController;
use App\Http\Controllers\Api\V1\EventController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\WishlistController;

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

/** php artisn route:list */

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search']);

Route::post('/user/{id}/update', [UserController::class, 'update']);

Route::get('/businesses/search', [BusinessController::class, 'search']);
Route::get('/businesses/{id}', [BusinessController::class, 'show']);
Route::get('/businesses/{business_id}/photos', [PhotoController::class, 'index']);
Route::get('/businesses/{business_id}/reviews', [ReviewController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/destinations', [DestinationController::class, 'index']);
Route::get('/destinations/{id}', [DestinationController::class, 'show']);

Route::get('/promotions', [PromotionController::class, 'index']);
Route::get('/promotions/search', [PromotionController::class, 'search']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/search', [EventController::class, 'search']);

Route::post('/wishlist/create', [WishlistController::class, 'create']);
Route::delete('/wishlist/destroy', [WishlistController::class, 'destroy']);
Route::get('/wishlist/{user_id}', [WishlistController::class, 'show']);

Route::post('/reviews/create', [ReviewController::class, 'create']);
Route::delete('/reviews/destroy', [ReviewController::class, 'destroy']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->name('verification.send')->middleware('auth:sanctum');
// This route should be named verification.verify
// Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify')->middleware('auth:sanctum');

Route::post('/forgot-password', [NewPasswordController::class, 'forgotPassword']);
Route::post('/reset-password', [NewPasswordController::class, 'reset']);

