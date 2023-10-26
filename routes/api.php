<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('equipment', \App\Http\Controllers\equipment\GetEquimpmentListController::class)->name('get-equipment-list');
Route::get('equipment/{equipment}', [\App\Http\Controllers\equipment\GetEquipmentByIdController::class, "get"])->name('get-equipment-by-id');
Route::post('equipment', [\App\Http\Controllers\equipment\CreateEquipmentController::class, "store"])->name('create-equipment');
Route::put('equipment/{equipment}', [\App\Http\Controllers\equipment\UpdateEquipmentController::class, "update"])->name('update-equipment-by-id');
Route::delete('equipment/{equipment}', [\App\Http\Controllers\equipment\DeleteEquipmentController::class, "delete"])->name('delete-equipment-by-id');
Route::get('equipment-type', \App\Http\Controllers\equipmentType\GetEquipmentTypeListController::class)->name('get-equipment-type-list');
