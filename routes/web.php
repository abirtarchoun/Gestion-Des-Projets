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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth', 'admin')->name('admin.dashboard');

Route::get('/admin-dashboard2', function () {
    return view('admin.dashboard2');
})->middleware('auth', 'admin')->name('admin.dashboard2');

Route::get('/admin-dashboard3', function () {
    return view('admin.dashboard3');
})->middleware('auth', 'admin')->name('admin.dashboard3');


Route::get('/admin-vectorMaps', function () {
    return view('admin.vectorMaps');
})->middleware('auth', 'admin')->name('admin.vectorMaps');

Route::get('/admin-Apexchart', function () {
    return view('admin.Apexchart');
})->middleware('auth', 'admin')->name('admin.Apexchart');

Route::get('/admin-Amcharts', function () {
    return view('admin.Amcharts');
})->middleware('auth', 'admin')->name('admin.Amcharts');
Route::get('/admin-MorrisChart', function () {
    return view('admin.MorrisChart');
})->middleware('auth', 'admin')->name('admin.MorrisChart');

Route::get('/admin-ChartJs', function () {
    return view('admin.ChartJs');
})->middleware('auth', 'admin')->name('admin.ChartJs');

Route::resource('enseignants','Admin\EnseignantController');

//Route::get('/Ens', function () {
   // return view('Ens.Enseignant');
//});

//Route::resource('enseignants', 'Ens\EnseignantController');