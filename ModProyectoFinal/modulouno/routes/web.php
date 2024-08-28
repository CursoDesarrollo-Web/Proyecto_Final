<?php

use App\Http\Controllers\MateriasprimasController;
use App\Models\Materiasprimas;
use Illuminate\Support\Facades\Route;

Route::get('/',[MateriasprimasController::class, 'index'])->name('materiasprimas.index');
Route::get('/create',[MateriasprimasController::class, 'create'])->name('materiasprimas.create');
Route::get('/edit',[MateriasprimasController::class, 'edit'])->name('materiasprimas.edit');