<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\NameController;
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



Route::get("/", [NameController::class, "index"])->name("index");
Route::post('/', [NameController::class, 'store']);

Route::get("check", [GeneralController::class, "check"])->name("check");

Route::get("delete", [GeneralController::class, "deleteIndex"])->name("delete-index");
Route::post("delete", [GeneralController::class, 'deleteData'])->name('delete-data');

