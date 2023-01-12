<?php

use Illuminate\Support\Facades\Route;

Route::get('/anume/test', function(){
    return 'hello plugin';
});

Route::group(['prefix' => config('delgont.route_prefix', 'dashboard'), 'middleware' => 'web'], function(){

});
