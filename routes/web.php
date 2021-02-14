<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'StudentController@index')->name('students.index');


Route::get('/students/create', 'StudentController@create')->name('students.create');


//route for taking the submition and storing the data in db
Route::post('/students', 'StudentController@store')->name('students.store');


Route::get('/{student}', 'StudentController@show')->name('students.show');

