<?php

use Illuminate\Support\Facades\Route;
use Admin\UserController;
use User\Profile;
use Wraper\ProductController;
use App\Providers\AuthServiceProvider;
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

Route::get('/', function () {
    return view('index');
});

// wejscie dla usera
Route::prefix('user')->middleware(['auth',])->name('user.')->group(function(){
    Route::get('/profile', Profile::class)->name('profile');
});

//products
Route::prefix('wraper')->middleware(['auth','auth.isUser'])->name('wraper.')->group(function(){
    Route::resource('/products', ProductController::Class);
});

// wejscie dla admina
Route::prefix('admin')->middleware(['auth','auth.isAdmin'])->name('admin.')->group(function(){
    Route::resource('/users', UserController::class);
});