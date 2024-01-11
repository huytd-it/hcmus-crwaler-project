<?php

use App\Http\Controllers\HoiNghiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/crawler', [HoiNghiController::class, 'index']);
Route::get('/crawler2', [HoiNghiController::class, 'crawler2']);

Route::get('/', function() {
    return view('index');
});
