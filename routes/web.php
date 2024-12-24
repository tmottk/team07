<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderStatistic;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('intro_sdgs');
});

Route::get('GenderStatistics', [GenderStatistic::class, 'index'])->where('id', '[0-9]+')->name('GenderStatistics.index');
Route::get('GenderStatistics/{id}', [GenderStatistic::class, 'show'])->where('id', '[0-9]+')->name('GenderStatistics.show');
Route::get('GenderStatistics/{id}/edit', [GenderStatistic::class, 'edit'])->where('id', '[0-9]+')->name('GenderStatistics.edit');
Route::patch('GenderStatistics/update/{id}', [GenderStatistic::class, 'update'])->where('id', '[0-9]+')->name('GenderStatistics.update');
Route::delete('GenderStatistics/delete/{id}', [GenderStatistic::class, 'destroy'])->where('id', '[0-9]+')->name('GenderStatistics.destroy');
Route::get('GenderStatistics/create', [GenderStatistic::class, 'create'])->name('GenderStatistics.create');
Route::post('GenderStatistics/store', [GenderStatistic::class, 'store'])->name('GenderStatistics.store');
Route::get('test', function() { 
    return view('heard');
});

