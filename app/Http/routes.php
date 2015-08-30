<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/lala', function () {
    return view('welcome');
});

Route::resource('/', 'Sibankum\SibankumController');
Route::get('index', 'Sibankum\SibankumController@demo');

Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@postLogin');
Route::get('logout', 'LoginController@logout');

/**
 * Route Untuk menampilkan Dashboard / Home
 */
Route::get('home', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\DashboardController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);

/**
 * Route untuk menampilkan data Court Type
 */
Route::get('court_type', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtTypeController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('court_type/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtTypeController@create',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::post('court_type/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtTypeController@store',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_type/edit/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtTypeController@edit',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_type/show/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtTypeController@show',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('court_type/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtTypeController@update',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_type/destroy/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtTypeController@destroy',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);


/**
 * Route Untuk menampilkan user
 */
Route::get('users', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\UserController@index',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::get('user/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\UserController@create',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::post('user/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\UserController@store',
	'roles' => ['administrator',] // Only an administrator can access this route
]);
Route::get('user/edit/{id}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\UserController@edit',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::post('user/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\UserController@update',
	'roles' => ['administrator',] // Only an administrator can access this route
]);
Route::get('user/destroy/{id}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\UserController@destroy',
	'roles' => ['administrator'] // Only an administrator can access this route
]);

/**
 * Route Untuk menampilkan role
 */
Route::get('roles', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\RoleController@index',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::get('role/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\RoleController@create',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::post('role/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\RoleController@store',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::get('role/edit/{id}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\RoleController@edit',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::post('role/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\RoleController@update',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::get('role/destroy/{id}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\RoleController@destroy',
	'roles' => ['administrator'] // Only an administrator can access this route
]);