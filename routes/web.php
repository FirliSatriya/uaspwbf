<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => config('admin.prefix'),
    'namespace' => 'App\Http\Controllers', // Sesuaikan dengan namespace yang benar
], function () {
    Route::get('login', 'LoginAdminController@formlogin')->name('admin.login');
    Route::post('login', 'LoginAdminController@login');

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('logout', 'LoginAdminController@logout')->name('admin.logout');
        Route::view('/', 'dashboard')->name('dashboard');
        Route::view('/post', 'data-post')->name('post')->middleware('can:role,admin');
        Route::view('/admin', 'data-admin')->name('admin')->middleware('can:role,admin');
    });
});
