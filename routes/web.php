<?php

use App\Http\Controllers\ExplorerController;
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

    Route::get('/profiles/{user:username}', [ProfileController::class, 'show'])->name('tweets.profile');
    Route::get('/profiles/{user:username}/edit', [ProfileController::class, 'edit'])
        ->name('profile.edit')
        ->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', [ProfileController::class, 'update'])
        ->name('profile.update')
        ->middleware('can:edit,user');
    Route::post('/profiles/{user:username}/follow', [FollowController::class, 'store'])->name('follow.store');
    Route::delete('/profiles/{user:username}/follow', [FollowController::class, 'destroy'])->name('follow.destroy');

    Route::get('/explore', [ExplorerController::class, 'index'])->name('explore.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

