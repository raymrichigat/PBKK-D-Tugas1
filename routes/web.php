<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=> 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama'=> 'Genta Putra Prayoga','title'=> 'About']);
});

//Buat 2 rute baru
// 1. /blog
// 2 buah artikel, judul, dan isi
Route::get('/blog', function () {
    return view('blog', ['title'=> 'Blog']);
});

// 2. /contact 
// email / sosmed 
Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});