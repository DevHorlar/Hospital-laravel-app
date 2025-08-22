<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/blog-details-right-sidebar', function () {
    return view('blog-details-right-sidebar');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/doctor-details', function () {
    return view('doctor-details');
});

Route::get('/appointments', function () {
    return view('appointments');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/home-v2', function () {
    return view('home-v2');
});

Route::get('/home-v3', function () {
    return view('home-v3');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/service-details', function () {
    return view('service-details');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/timetable', function () {
    return view('timetable');
});

Route::get('/angela', function () {
    return view('angela');
});
