<?php

Route::redirect('/', '/login');

Route::redirect('/home', '/admin');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

	Route::delete('applications/destroy', 'ApplicationController@massDestroy')->name('applications.massDestroy');

    Route::resource('applications', 'ApplicationController');

    //define custom route
    Route::get('userviewedit/{id}/{name}/', 'ApplicationController@userviewedit')->name("userviewedit");
    Route::get('appviewedit/{id}/', 'ApplicationController@appviewedit')->name("appviewedit");


    Route::put('userviewupdate', 'ApplicationController@userviewupdate')->name("userviewupdate");
    Route::put('appviewupdate', 'ApplicationController@appviewupdate')->name("appviewupdate");

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');
});
