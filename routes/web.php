<?php

use App\Http\Controllers\DashboardAntrianController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardLaporanController;
use App\Http\Controllers\FrontAntrianController;

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


Route::resource('antrian', FrontAntrianController::class);
Route::get('livewire/antrian/cetakAntrian', [FrontAntrianController::class, 'cetakAntrian'])->name('cetakAntrian');

Route::middleware('auth')->get('/dashboard', [DashboardController::class, 'index']);
Route::get('/laporan/cetak', [DashboardLaporanController::class, 'cetaklaporan'])->name('cetakLaporan');

Auth::routes();
Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'CheckRole:admin'], function () {
        Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::get('dashboard/antrian/poliPencegahan', [DashboardAntrianController::class, 'indexPoliPencegahan']);
        Route::get('dashboard/antrian/poliRestoratifi', [DashboardAntrianController::class, 'indexPoliRestoratifi']);
        Route::get('dashboard/antrian/poliEndodontik', [DashboardAntrianController::class, 'indexPoliEndodontik']);
        Route::get('dashboard/antrian/poliPeriodontal', [DashboardAntrianController::class, 'indexPoliPeriodontal']);
        Route::get('dashboard/antrian/poliProstodontik', [DashboardAntrianController::class, 'indexPoliProstodontik']);
        Route::get('dashboard/antrian/poliEstetikaGigi', [DashboardAntrianController::class, 'indexPoliEstetikaGigi']);
        Route::get('dashboard/antrian/poliGigiSensitif', [DashboardAntrianController::class, 'indexPoliGigiSensitif']);

        Route::get('dashboard/laporan/index', [DashboardLaporanController::class, 'index']);
        Route::get('livewire/dashboard/laporan/cetakLaporan', [DashboardLaporanController::class, 'cetakLaporan'])->name('cetakLaporan');
    });
});
