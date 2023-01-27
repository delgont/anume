<?php

//Dashboard Routes

use Illuminate\Support\Facades\Route;

Route::get('/'.option('aamsnm_online_application_prefix', 'online-application'), function(){
 return 'applications main page';
})->name('anume.web.admissions.apply');