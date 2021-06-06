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

//*******************************  Dashboard Admin  view ********************************************//

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth', 'admin')->name('admin.dashboard');

Route::get('/admin-dashboard2', function () {
    return view('admin.dashboard2');
})->middleware('auth', 'admin')->name('admin.dashboard2');

Route::get('/admin-dashboard3', function () {
    return view('admin.dashboard3');
})->middleware('auth', 'admin')->name('admin.dashboard3');

//*******************************  victor Map  view ********************************************//


Route::get('/admin-vectorMaps', function () {
    return view('admin.vectorMaps');
})->middleware('auth', 'admin')->name('admin.vectorMaps');

//*******************************  Apex Chart view ********************************************//

Route::get('/admin-Apexchart', function () {
    return view('admin.Apexchart');
})->middleware('auth', 'admin')->name('admin.Apexchart');

//*******************************  AMChart view ********************************************//

Route::get('/admin-Amcharts', function () {
    return view('admin.Amcharts');
})->middleware('auth', 'admin')->name('admin.Amcharts');

//*******************************  Chart Morris  view ********************************************//

Route::get('/admin-events', function () {
    return view('admin.events');
})->middleware('auth', 'admin')->name('admin.events');
    
//*******************************  BChart Morris  view ********************************************//

Route::get('/admin-MorrisChart', function () {
    return view('admin.MorrisChart');
})->middleware('auth', 'admin')->name('admin.MorrisChart');

//*******************************  Charts JS  view ********************************************//

Route::get('/admin-ChartJs', function () {
    return view('admin.ChartJs');
})->middleware('auth', 'admin')->name('admin.ChartJs');
//******************************* alerte view ********************************************//
Route::get('/admin-alerte', function () {
    return view('admin.alerte');
})->middleware('auth', 'admin')->name('admin.alerte');

//*******************************  Notification  view ********************************************//
Route::get('/admin-notification', function () {
    return view('admin.notification');
})->middleware('auth', 'admin')->name('admin.notification');

//*******************************  Boutton  view********************************************//
Route::get('/admin-boutton', function () {
    return view('admin.boutton');
})->middleware('auth', 'admin')->name('admin.boutton');

//*******************************   Enseignant view ********************************************//

Route::resource('enseignants','Admin\EnseignantController');

//Route::get('/Ens', function () {
   // return view('Ens.Enseignant');
//});

//Route::resource('enseignants', 'Ens\EnseignantController');