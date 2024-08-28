<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Middleware\CheckUserGroup;
use App\Http\Middleware\CheckLogin;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login')->middleware(CheckLogin::class);
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    Route::get('/', function () { return view('menu'); });
    Route::get('/new-sheet', [App\Http\Controllers\NewSheetController::class, 'newSheet']);
    Route::post('/new-sheet/race', [App\Http\Controllers\NewSheetController::class, 'getRace']);
    Route::post('/new-sheet/rol', [App\Http\Controllers\NewSheetController::class, 'getRol']);
    Route::post('/new-sheet/answer', [App\Http\Controllers\NewSheetController::class, 'getAnswerReward']);
    Route::post('/new-sheet/create', [App\Http\Controllers\NewSheetController::class, 'create']);

    Route::get('/sheets', [App\Http\Controllers\SheetController::class, 'sheets']);

    Route::get('/sheet/{id}', [App\Http\Controllers\SheetController::class, 'sheet']);

});

Route::get('/access-denied', function () {
    return view('access-denied');
});
