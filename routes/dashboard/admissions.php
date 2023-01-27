<?php

//Dashboard Routes

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
 return 'admissions main page';
})->name('anume.dashboard.admissions');


Route::get('/applications', function(){
 return 'applications main page';
})->name('anume.dashboard.admissions.applications');