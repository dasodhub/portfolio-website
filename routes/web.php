<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return 'About Page';
})->name('about');


Route::get('/projects', function () {
    return 'Projects Page';
})->name('projects');

Route::get('/contact', function () {
    return 'Contact Page';
})->name('contact');


