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


Route::get('/', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // admin middleware route group
    Route::middleware('admin')->namespace('Admin')->prefix('admin')->group(function () {
        
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        
        Route::get('/admin-dashboard2', function () {
            return view('admin.dashboard2');
           })->name('admin.dashboard2');
        
           Route::get('/admin-dashboard3', function () {
            return view('admin.dashboard3');
             })->name('admin.dashboard3');
           
         Route::get('/admin-vectorMaps', function () {
         return view('admin.vectorMaps');
         })->name('admin.vectorMaps');

         Route::get('/admin-Apexchart', function () {
            return view('admin.Apexchart');
        })->name('admin.Apexchart');
        
        Route::get('/admin-Amcharts', function () {
        return view('admin.Amcharts');
        })->name('admin.Amcharts');
        
        Route::get('/admin-events', function () {
        return view('admin.events');
        })->name('admin.events');

       Route::get('/admin-MorrisChart', function () {
       return view('admin.MorrisChart');
        })->name('admin.MorrisChart');

        Route::get('/admin-ChartJs', function () {   
        return view('admin.ChartJs');
        })->name('admin.ChartJs');

        Route::get('/admin-alerte', function () {
         return view('admin.alerte');  
        })->name('admin.alerte'); 

           Route::get('/admin-notification', function () {
           return view('admin.notification');
           })->name('admin.notification');

          Route::get('/admin-boutton', function () {
          return view('admin.boutton');
          })->name('admin.boutton');

          Route::get('/admin-panel', function () {  
           return view('admin.panel');
           })->name('admin.panel');

           Route::get('/admin-gride', function () {
           return view('admin.gride');
           })->name('admin.gride');

          Route::get('/admin-carousel', function () {
          return view('admin.carousel');
           })->name('admin.carousel');

          Route::get('/admin-icone', function () {
           return view('admin.icone');
          })->name('admin.icone');

          Route::resource('enseignants','EnseignantController');
          Route::resource('projets','ProjetController');
          Route::resource('etudiants','EtudiantController');
          Route::resource('equipes','EquipeController');
          
          


    });
});
 