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
    return view('website.login');
});

// Route::get('/registerUser', function () {
//     return view('website.register');
// });

Route::match(['get','post'],'/registerUser','UserloginregisterController@register');

Route::match(['get','post'],'/loginUser','UserloginregisterController@login');

Route::match(['get','post'],'/logoutUser','UserloginregisterController@logout');

Auth::routes();
Route::get('/index','HomepageController@index');
Route::get('/indexassi','HomepageController@indexassi');

Route::match(['get','post'],'/operating','StudyMaterialController@os');
Route::match(['get','post'],'/software','StudyMaterialController@se');
Route::match(['get','post'],'/datastr','StudyMaterialController@ds');

Route::get('master','AdminController@master');
Route::post('/loginadmin','AdminController@loginadmin');
Route::match(['get','post'],'/log','AdminController@login');
Route::match(['get','post'],'/addnotes','NotesController@addnotes');

Route::get('/view','NotesController@view');
Route::get('/curd/edit/{id}','NotesController@edit');
Route::post('/curd/update','NotesController@update');
Route::get('/curd/delete/{id}','NotesController@delete');



Route::match(['get','post'],'/addassignment','AssignmentController@addassignment');
Route::get('/viewassignment','AssignmentController@viewassignment');
Route::get('/curd/edit/{id}','AssignmentController@editassignment');
Route::post('/curd/update/assi','AssignmentController@updateassignment');
Route::get('/curd/delete/{id}','AssignmentController@deleteassignment');