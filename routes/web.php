<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * default route
 * redirect to dashboard
 */
Route::redirect('/', '/dashboard', 301);

/**
 * custom authentification routes
*/
Route::namespace('Auth')->group(function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::post('logout', 'LoginController@logout')->name('logout');
});

/**
 * routes with auth middleware
 * which mean only logged user can access
 */
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/profile', 'DashboardController@showUserProfile')->name('profile');

    // Certificate
    Route::get('certificates', 'CertificatesController@index');
    Route::get('certificate/{id}', 'CertificatesController@show');
    Route::get('certificates/add', 'CertificatesController@showAddForm');
    Route::post('certificate/add', 'CertificatesController@store');

    // Tax
    Route::get('taxes', 'TaxesController@index');
    Route::get('tax/{id}', 'TaxesController@show');
    Route::get('taxes/add', 'TaxesController@showAddForm');
    Route::post('tax/add', 'TaxesController@store');

    // Lease
    Route::get('leases', 'LeasesController@index');
    Route::get('lease/{id}', 'LeasesController@show');
    Route::get('leases/add', 'LeasesController@showAddForm');
    Route::post('leases/add', 'LeasesController@store');

    // Property
    Route::get('properties', 'PropertiesController@index');
    Route::get('properties/add', 'PropertiesController@showAddForm');

    // User Manager
    Route::get('users', 'UserManagerController@index');
    Route::get('add_user', array('uses' => 'UserManagerController@ShowAddUser', 'as' => 'add_user' ));
    Route::post('add_users', 'UserManagerController@store');
    // 
});


/** not used */
// Auth::routes();
