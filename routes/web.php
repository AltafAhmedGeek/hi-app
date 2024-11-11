<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hi World';
});

Route::get('/hi', function () {
    return 'Hi User';
});
