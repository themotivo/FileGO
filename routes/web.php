<?php

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/',                         'Auth\LoginController@showLoginForm')->name('login');
Route::post('/',                        'Auth\LoginController@login');
Route::post('logout',                   'Auth\LoginController@logout')->name('logout');
Route::get('password/reset',            'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email',           'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}',    'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset',           'Auth\ResetPasswordController@reset');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
Route::get('/home',                     'Application\HomeController@index')->name('home');
