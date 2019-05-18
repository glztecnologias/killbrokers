<?php

Route::prefix('portal')->group(function () {

  	Route::get('/','HomeController@index')->name('portal.home');
    

 });