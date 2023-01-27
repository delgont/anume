<?php

use Illuminate\Support\Facades\Route;

use Delgont\Anume\Http\Controllers\Web\Contact\ContactController;
use Delgont\Anume\Http\Controllers\Dashboard\Setting\SettingController;
use Delgont\Anume\Http\Controllers\Dashboard\ContactInfoController;
use Delgont\Anume\Http\Controllers\Dashboard\HeaderImageController;
use Delgont\Anume\Http\Controllers\Dashboard\IntroController;


//Website Routes
Route::prefix('/admissions')->group(__DIR__.'/web/admissions.php');

Route::prefix( '/'.option( 'aamsnm_events_route_prefix', config( 'events.options.aamsnm_events_route_prefix', 'upcoming-events' ) ) )->group(__DIR__.'/web/events.php');

Route::get( 'contact-us', [ContactController::class, 'index'] )->name('anume.web.contact');
Route::post( 'contact-us', [ContactController::class, 'send'] )->name('anume.web.contact.send');



//Dashboard Routes
Route::group(['prefix' => config('delgont.route_prefix', 'dashboard'), 'middleware' => ['web', 'auth']], function(){
    Route::prefix('/anume/events')->group(__DIR__.'/dashboard/events.php');
    Route::prefix('anume//admissions')->group(__DIR__.'/dashboard/admissions.php');

    Route::get('/anume/settings', [SettingController::class, 'index'])->name('anume.dashboard.settings');

    Route::get('/anume/settings/contact-info', [ContactInfoController::class, 'index'])->name('anume.dashboard.settings.contact-info');
    Route::post('/anume/settings/contact-info', [ContactInfoController::class, 'store'])->name('anume.dashboard.settings.contact-info.store');

    Route::get('/anume/settings/headerimage', [HeaderImageController::class, 'index'])->name('anume.dashboard.settings.headerimage');
    Route::post('/anume/settings/headerimage', [HeaderImageController::class, 'store'])->name('anume.dashboard.settings.headerimage.store');

    Route::get('/anume/settings/intro', [IntroController::class, 'index'])->name('anume.dashboard.settings.intro');
    Route::post('/anume/settings/intro', [IntroController::class, 'store'])->name('anume.dashboard.settings.intro.store');

});
