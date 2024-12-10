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
#新增表單
Route::get('environmentalvolunteers/create', [EnvironmentalVolunteersController::class, 'create'])->name('environmentalvolunteers.create');



Route::get('/', [EnvironmentalVolunteersController::class, 'index'])->name('environmentalvolunteers.index');
Route::get('environmentalvolunteers/{id}', [EnvironmentalVolunteersController::class, 'show'])->where('id', '[0-9]+')->name('environmentalvolunteer.show');
Route::get('environmentalvolunteers/{id}/edit', [EnvironmentalVolunteersController::class, 'edit'])->where('id', '[0-9]+')->name('environmentalvolunteer.edit');
Route::delete('environmentalvolunteers/delete/{id}', [EnvironmentalVolunteersController::class, 'destroy'])->where('id', '[0-9]+')->name('environmentalvolunteer.destroy');
