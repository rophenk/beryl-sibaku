<?php

Route::group(array('module' => 'Sibankum', 'namespace' => 'App\Modules\Sibankum\Controllers'), function() {

    Route::resource('/', 'SibankumController');
    Route::resource('sibankum', 'SibankumController');
    Route::resource('/admin', 'Admin\DashboardController');
 	Route::resource('/admin/dashboard', 'Admin\DashboardController@dashboard');
 	Route::get('index', 'SibankumController@demo');
	/*Route::get('home', 'Admin\DashboardController@dashboard');*/


});	
/**
	 * Route Untuk menampilkan Dashboard / Home
	 */
	Route::get('home', [
		'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
		'uses' => 'App\Modules\Sibankum\Admin\DashboardController@index',
		'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
	]);