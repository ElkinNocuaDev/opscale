<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nova/fullcalendar', function () {
    return view('nova::fullcalendar');
});


