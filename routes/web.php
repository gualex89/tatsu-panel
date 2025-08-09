<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RespuestaBotController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BotConfigController;

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



//auth

Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginVerify']);
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'registerVerify']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');


});

Route::middleware('auth')->group(function () {
    Route::get('/respuestas-bot', [RespuestaBotController::class, 'index'])->name('respuestas-bot.index');
    Route::post('/respuestas-bot', [RespuestaBotController::class, 'store'])->name('respuestas-bot.store');
    
});


Route::post('/clavija', [BotConfigController::class, 'clavija'])->name('clavija.update');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

