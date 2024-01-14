<?php

use App\Http\Controllers\ChuDeController;
use App\Http\Controllers\DiaDiemController;
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


Route::prefix('v1/api/')->group(function () {
    Route::name('v1.api.')->group(function () {

        Route::prefix('hoi-nghi/')->group(function () {
            Route::name('hoi-nghi.')->group(function () {
                Route::get('all', [HoiNghiController::class, 'getAll'])->name('all');
            });
        });
        Route::prefix('dia-diem/')->group(function () {
            Route::name('dia-diem.')->group(function () {
                Route::get('all', [DiaDiemController::class, 'index'])->name('all');
            });
        });

        Route::prefix('dia-diem/')->group(function () {
            Route::name('dia-diem.')->group(function () {
                Route::get('all', [ChuDeController::class, 'index'])->name('all');
            });
        });
    });
});

Route::get('/', function () {
    return view('index');
});
