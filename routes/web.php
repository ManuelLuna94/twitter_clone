<?php

use App\Http\Controllers\TweetController;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;
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
Route::middleware('auth')->group(function () {
    Route::get('/', [TweetController::class, 'index']);
    Route::post('/tweets', [TweetController::class, 'store']);

    Route::get('/profiles/{user}', [ProfileController::class, 'show'])->name('tweets.profile');

    Route::post('/profiles/{user}/follow', [FollowController::class, 'store'])->name('follow.store');
    Route::delete('/profiles/{user}/follow', [FollowController::class, 'destroy'])->name('follow.destroy');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

