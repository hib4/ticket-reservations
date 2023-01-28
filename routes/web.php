<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::group(['prefix' => 'destinations'], function () {
    Route::get('/all', [DestinationController::class, 'index']);
    Route::get('/detail/{destination}', [DestinationController::class, 'show']);
});

Route::group(['prefix' => 'tickets'], function () {
    Route::get('/all', [TicketController::class, 'index'])->middleware('auth');
    Route::get('detail/{ticket}', [TicketController::class, 'show']);
    Route::get('/create/{destination}', [TicketController::class, 'create'])->middleware('auth');
    Route::post('/add', [TicketController::class, 'store']);
    Route::delete('/delete/{ticket}', [TicketController::class, 'destroy']);
    Route::get('/edit/{ticket}', [TicketController::class, 'edit']);
    Route::post('/update/{ticket}', [TicketController::class, 'update']);
});

Route::group(['prefix' => 'login'], function () {
    Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/', [LoginController::class, 'authenticate'])->middleware('guest');
});

Route::group(['prefix' => 'register'], function () {
    Route::get('/', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/', [RegisterController::class, 'create'])->middleware('guest');
});

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->middleware('auth');

    Route::group(['prefix' => 'tickets'], function () {
        Route::get('/all', [DashboardController::class, 'index'])->middleware('auth');
        Route::get('/detail/{ticket}', [DashboardController::class, 'show'])->middleware('auth');
        Route::get('/create/{destination}', [DashboardController::class, 'create'])->middleware('auth');
        Route::post('/add', [DashboardController::class, 'store'])->middleware('auth');
        Route::delete('/delete/{ticket}', [DashboardController::class, 'destroy'])->middleware('auth');
        Route::get('/edit/{ticket}', [DashboardController::class, 'edit'])->middleware('auth');
        Route::post('/update/{ticket}', [DashboardController::class, 'update'])->middleware('auth');
    });
});
