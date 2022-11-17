<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElektronikController;
use App\Http\Controllers\ElektronikTypeController;

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

Route::get('/', [ElektronikController::class, 'index']);
Route::get('/create', [ElektronikController::class, 'create'])->name("create");
Route::post('/store', [ElektronikController::class, 'store'])->name("store");
Route::get('/edit/{id}', [ElektronikController::class, 'edit'])->name("edit");
Route::post('/update/{id}', [ElektronikController::class, 'update'])->name("update");
Route::delete("/destroy/{id}", [ElektronikController::class,  "destroy"])->name("destroy");


Route::get('/type', [ElektronikTypeController::class, 'index'])->name("type");
Route::get('/create_type', [ElektronikTypeController::class, 'create_type'])->name("create_type");
Route::post('/store_type', [ElektronikTypeController::class, 'store_type'])->name("store_type");
Route::get('/edit_type/{id}', [ElektronikTypeController::class, 'edit_type'])->name("edit_type");
Route::delete("/destroy_type/{id}", [ElektronikTypeController::class,  "destroy_type"])->name("destroy_type");
