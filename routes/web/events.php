<?php

//Dashboard Routes

use Illuminate\Support\Facades\Route;
use Delgont\Anume\Http\Controllers\Web\EventController;

Route::get('/', [EventController::class, 'index'])->middleware('web')->name('anume.web.events');
Route::get('/{slug}', [EventController::class, 'show'])->name('anume.web.events.show');