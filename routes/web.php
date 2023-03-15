<?php

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
use App\Http\Controllers\PersonController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\OwnerController;

Route::resource('/person', PersonController::class);
Route::resource('asset', AssetController::class);
Route::resource('/owner', OwnerController::class);

Route::get('/welcome', function () {
    return "Hello World!";
})->middleware('auth');



Route::get('/', function () {
    return view('welcomes');
});
