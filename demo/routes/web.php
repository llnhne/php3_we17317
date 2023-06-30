<?php

use App\Http\Controllers\QtinController;
use App\Http\Controllers\TinController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tin-tuc', [TinController::class, 'index']);
Route::get('/tin-tuc/{id}', [TinController::class, 'detail']);
// Route::resource('/quan-tri-tin', [QtinController:: class, 'show']);

// Route::get('/tin-tuc', function(){
//     return view('tin');
// });
