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
Route::get('/students/information','StudentController@index');
Route::get('/students/information','StudentController@index')->name('students.index');
Route::get('/students/addStudent','StudentController@addStudent')->name('students.addStudent');
Route::post('/students/store','StudentController@store')->name('students.store');
Route::get('/students/{id}/edit','StudentController@edit')->name('students.edit');
Route::post('/students/{id}/update','StudentController@update')->name('students.update');
Route::get('/students/{id}/destroy','StudentController@destroy')->name('students.destroy');
Route::get('/results/{id}/addResult','ResultController@result')->name('results.result');
Route::get('/results/{id}/viewResult','ResultController@viewResult')->name('results.viewResult');
Route::post('/result/store','ResultController@store')->name('result.store');
