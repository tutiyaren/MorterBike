<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\SceneryController;


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


// 認証
Route::get('/auth/login', [UserAuthController::class, 'login'])->name('login');
Route::post('/auth/login/process', [UserAuthController::class, 'loginProcess'])->name('login.process');
Route::group(['middleware' => 'clear.user.session'], function () {
    Route::get('/auth/register', [UserAuthController::class, 'register'])->name('register');
    Route::post('/auth/register/process', [UserAuthController::class, 'registerProcess'])->name('register.process');
    Route::get('/auth/register-ps', [UserAuthController::class, 'password'])->name('password');
    Route::post('/auth/register-ps/process', [UserAuthController::class, 'passwordProcess'])->name('password.process');
});
Route::post('/auth/logout', [UserAuthController::class, 'logout'])->name('logout');

// トップページ
Route::get('/', [TopController::class, 'index'])->name('top');
// What is バイフページ
Route::get('/know_app', [TopController::class, 'knowApp'])->name('know.app');
// プロフィールページ
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store');

// お問い合わせ
Route::group(['middleware' => 'clear.contact.session'], function () {
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact/confirmation', [ContactController::class, 'confirmation'])->name('contact.confirmation');
    Route::post('/contact/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');
});

// おすすめ・飲食
Route::get('/food', [FoodController::class, 'index'])->name('food.index');
Route::get('/food/create', [FoodController::class, 'create'])->name('food.create');
Route::post('/food/store', [FoodController::class, 'store'])->name('food.store');
Route::get('/food/detail', [FoodController::class, 'detail'])->name('food.detail');

// おすすめ・風景
Route::get('/scenery', [SceneryController::class, 'index'])->name('scenery.index');
Route::get('/scenery/create', [SceneryController::class, 'create'])->name('scenery.create');
Route::post('/scenery/store', [SceneryController::class, 'store'])->name('scenery.store');
Route::get('/scenery/detail', [SceneryController::class, 'detail'])->name('scenery.detail');


