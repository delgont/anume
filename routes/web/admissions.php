<?php

//Dashboard Routes

use Illuminate\Support\Facades\Route;

use Delgont\Cms\Repository\Menu\MenuRepository;


Route::get('/online-application', function(){
    return app( MenuRepository::class )->fromCache()->menuItems('main_menu', 4);
})->name('anume.web.admissions.apply');