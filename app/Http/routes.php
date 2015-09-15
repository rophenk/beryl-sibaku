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
Route::post('result', 'Sibankum\SearchController@result');

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
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
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
 * Route untuk menampilkan data Court Level
 */
Route::get('court_level', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtLevelController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('court_level/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtLevelController@create',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::post('court_level/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtLevelController@store',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_level/edit/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtLevelController@edit',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_level/show/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtLevelController@show',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('court_level/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtLevelController@update',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_level/destroy/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtLevelController@destroy',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);

/**
 * Route untuk menampilkan data Court Party
 */
Route::get('court_party', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtPartyController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('court_party/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtPartyController@create',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::post('court_party/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtPartyController@store',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_party/edit/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtPartyController@edit',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_party/show/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtPartyController@show',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('court_party/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtPartyController@update',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('court_party/destroy/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CourtPartyController@destroy',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);

/**
 * Route untuk menampilkan data Instansi
 */
Route::get('instansi', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\InstansiController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('instansi/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\InstansiController@create',
	'roles' => ['administrator'] // Only an administrator can access this route
]);
Route::post('instansi/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\InstansiController@store',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('instansi/edit/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\InstansiController@edit',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('instansi/show/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\InstansiController@show',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('instansi/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\InstansiController@update',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
Route::get('instansi/destroy/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\InstansiController@destroy',
	'roles' => ['administrator'] // Only an administrator, or a manager can access this route
]);
/**
 * Route untuk menampilkan data Server
 */
Route::get('server', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ServerController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('server/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ServerController@create',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('server/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ServerController@store',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('server/edit/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ServerController@edit',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('server/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ServerController@update',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('server/destroy/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ServerController@destroy',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);

/**
 * Route untuk menampilkan data API/XLS
 */
Route::get('apis', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ApiController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('apis/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ApiController@create',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('apis/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ApiController@store',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('apis/edit/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ApiController@edit',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('apis/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ApiController@update',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('apis/destroy/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\ApiController@destroy',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);

/**
 * Route untuk menampilkan data Case
 */
Route::get('case', [
	'as' => 'case',
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CaseController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('case/create', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CaseController@create',
	'roles' => ['administrator', 'manager'] // Only an administrator can access this route
]);
Route::post('case/store', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CaseController@store',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('case/edit/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CaseController@edit',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('case/show/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CaseController@show',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::post('case/update', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CaseController@update',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);
Route::get('case/destroy/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CaseController@destroy',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
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

/*
* Route Untuk Pihak -pihak perkara (Case Party)
*/
Route::post('caseparty/store', [
	'as' => 'caseparty.store',
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\CasePartyController@store',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);

/*
* Route Untuk Upload File 
*/
Route::get('file/{uuid?}', [
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\FileController@index',
	'roles' => ['administrator', 'manager'] // Only an administrator can access this route
]);
Route::post('file/upload', [
	'as' => 'file.upload',
	'middleware' => ['auth', 'roles'], // A 'roles' middleware must be specified
	'uses' => 'Sibankum\Admin\FileController@upload',
	'roles' => ['administrator', 'manager'] // Only an administrator, or a manager can access this route
]);