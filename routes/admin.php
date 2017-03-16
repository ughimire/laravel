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

//$data = Illuminate\Support\Facades\Session::all();

Route::get('/admin/dashboard', 'DashboardController@dashboard');
//Route::get('users/index/{year}', 'UserController@index')->name('users.index.year');


Route::get('/lara-admin/', function () {

    //Auth::guard($guard)->check();
    return view('backend.login');
});
Route::group(['middleware' => ['web']], function () {

    Route::post('/admin-login', 'AdminLoginController@loginCheck');
});

Route::get('/lara-admin/', function () {


    return view('backend.login');
});


Route::group(['middleware' => 'admin'], function () {

    //Route::get('user/profile', 'UserController@showProfile')->name('profile');

    Route::get('/admin/login', function () {

        //return view('backend.login');
    });

    Route::get('/admin/', 'DashboardController@dashboard');

    Route::get('/admin/dashboard', 'DashboardController@dashboard');

    Route::get('/admin/logout', 'AdminController@logout');

    Route::get('/admin/about', 'AboutUsController@about');

    Route::get('/admin/form', 'AboutUsController@form');

    Route::get('/admin/register', 'AdminController@showRegister');

    Route::post('/admin/register', 'AdminController@registerAction');


    // delete admin

    Route::get('/admin/delete/{id}', 'AdminController@deleteAction')->where('id', '[0-9]+');

    Route::get('/admin/edit/{id}', 'AdminController@editAction')->where('id', '[0-9]+');

});
