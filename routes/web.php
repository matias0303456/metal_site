<?php

use App\Http\Controllers\CountryController;
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
})->name('home');

Route::get('/countries', [CountryController::class, 'getCountries'])->name('get_countries');
Route::get('/country/{id?}', [CountryController::class, 'getCountry'])->name('get_country');
Route::post('/save-country', [CountryController::class, 'createCountry'])->name('store_country');
Route::get('/update-country/{id}', [CountryController::class, 'updateCountry'])->name('update_country');
Route::get('/delete-country/{id}', [CountryController::class, 'deleteCountry'])->name('delete_country');
