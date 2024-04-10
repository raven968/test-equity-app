<?php

use Illuminate\Support\Facades\Route;

Route::get('bedroom/status/{id}','BedroomController@status')->name('bedroom_status');
