<?php

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

Auth::routes();

Route::get('forgot-password', [App\Http\Controllers\HomeController::class, 'forgotPassword'])->name('auth.forgot-password');
// Route::post('forgot-password', [App\Http\Controllers\HomeController::class, 'forgotPassword']);


Route::middleware(['auth'])->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('assessment.index');
    Route::post('assessment/store', [App\Http\Controllers\HomeController::class, 'store'])->name('assessment.store');

    Route::get('pertanyaan/excel', 'App\Http\Controllers\PertanyaanController@excel')->name('pertanyaan.excel');
    Route::post('pertanyaan/delete', 'App\Http\Controllers\PertanyaanController@delete')->name('pertanyaan.delete');
    Route::resource('pertanyaan', 'App\Http\Controllers\PertanyaanController');

    Route::post('user/delete', 'App\Http\Controllers\UserController@delete')->name('user.delete');
    Route::resource('user', 'App\Http\Controllers\UserController');

    Route::post('jadwal/delete', 'App\Http\Controllers\JadwalController@delete')->name('jadwal.delete');
    Route::resource('jadwal', 'App\Http\Controllers\JadwalController');

    Route::get('list-jadwal', [App\Http\Controllers\JadwalController::class, 'listJadwal'])->name('jadwal.list-jadwal');
    Route::post('submit-kode', [App\Http\Controllers\JadwalController::class, 'submitKode'])->name('jadwal.submit-kode');

    Route::get('report', [App\Http\Controllers\ReportController::class, 'index'])->name('report.index');
    Route::get('report/export', [App\Http\Controllers\ReportController::class, 'export'])->name('report.export');
    Route::get('report/cetak', [App\Http\Controllers\ReportController::class, 'cetak'])->name('report.cetak');
    Route::post('report/detail', [App\Http\Controllers\ReportController::class, 'detail'])->name('report.detail');
    Route::get('report/excel', 'App\Http\Controllers\ReportController@excel')->name('report.excel');
});