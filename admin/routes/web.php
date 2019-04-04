<?php


Route::get('/', function () {
    return view('Home.index');
});

// Sign in Test
Route::get('/signin', function () {
    return view('Auth.sign_in');
});

// Sign up Test
Route::get('/signup', function () {
    return view('Auth.sign_up');
});