<?php

use App\Http\Controllers\DestinationController;
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
    Route::get('/all', [TicketController::class, 'index']);
    Route::get('detail/{ticket}', [TicketController::class, 'show']);
    Route::get('/create/{destination}', [TicketController::class, 'create']);
    Route::post('/add', [TicketController::class, 'store']);
    Route::delete('/delete/{ticket}', [TicketController::class, 'destroy']);
    Route::get('/edit/{ticket}', [TicketController::class, 'edit']);
    Route::post('/update/{ticket}', [TicketController::class, 'update']);
});