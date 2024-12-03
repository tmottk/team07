<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EnvironmentalVolunteersController;

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

Route::get('/', function () {
    return view('environmental.index');
});
*/


Route::get('/', [EnvironmentalVolunteersController::class, 'index'])->name('environmentalvolunteers.index');
Route::get('environmentalvolunteers/{id}', [EnvironmentalVolunteersController::class, 'show'])->where('id', '[0-9]+')->name('environmentalvolunteer.show');
Route::get('environmentalvolunteers/{id}/edit', [EnvironmentalVolunteersController::class, 'destroy'])->where('id', '[0-9]+')->name('environmentalvolunteer.edit');
