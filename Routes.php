<?php 
use App\Core\Route;

    return[
        Route::get('|^category/([0-9]+)/?$|', 'Category', 'show'),
        Route::any('/^.*$/','Main','home')
    ];