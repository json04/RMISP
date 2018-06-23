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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-activity', 'ActivityController@create');
Route::post('/create-activity-post', 'ActivityController@store');

Route::get('/create-harvester', 'HarvesterController@create');
Route::post('/create-harvester-post', 'HarvesterController@store');


//viewing actions
Route::get('/rmisp/public/view/{id}', 'HomeController@retrieve'); // activity logs
Route::get('/rmisp/public/harvesters/view/{id}', 'HarvesterController@view'); // viewing harvester information

//update actions
Route::get('/activity/edit/{id}', 'HomeController@edit'); 
Route::get('/rmisp/public/edit/{id}', 'HarvesterController@edit'); // update harvester information
Route::post('/rmisp/public/edit/{id}', 'HarvesterController@update'); // update harvester information
Route::post('/activity/update/{id}', 'HomeController@update'); // update activity information

//removing actions
Route::get('/rmisp/public/remove/{id}', 'HarvesterController@remove'); // removing harvester record

//reports
Route::get('/harvester-individual-report', 'ReportsController@hir');
Route::post('/search-week-ending-hir', 'ReportsController@searchHir');
Route::post('/generate-week-ending-hir-excel', 'ReportsController@generateHir');