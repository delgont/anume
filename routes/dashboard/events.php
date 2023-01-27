<?php

//Dashboard Routes

use Illuminate\Support\Facades\Route;
use Delgont\Anume\Http\Controllers\Dashboard\EventController;

Route::get('/', [EventController::class, 'index'])->name('anume.dashboard.events');
Route::get('/create', [EventController::class, 'create'])->name('anume.dashboard.events.create');
Route::get('/edit/{id}', [EventController::class, 'edit'])->name('anume.dashboard.events.edit');
Route::post('/update/{id}', [EventController::class, 'update'])->name('anume.dashboard.events.update');
Route::get('/destroy/{id}', [EventController::class, 'destroy'])->name('anume.dashboard.events.destroy');
Route::post('/store', [EventController::class, 'store'])->name('anume.dashboard.events.store');