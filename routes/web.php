<?php

use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    $user = $request->user();
    // $user->hasRole('admin', 'user');

    // dd($user->hasPermissionTo('add products'));

    dd($user->can('add products'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
