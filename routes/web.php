<?php

use App\Http\Controllers\Website\WebsiteController;
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

Route::prefix('/')->name('website.')->group(function() {
    Route::get('/', [WebsiteController::class, 'index'])->name('index');
    Route::get('about', [WebsiteController::class, 'about'])->name('about');
    Route::get('deals', [WebsiteController::class, 'deals'])->name('deals');
    Route::get('login', [WebsiteController::class, 'login'])->name('login');
    Route::get('register', [WebsiteController::class, 'register'])->name('register');
});
