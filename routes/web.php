<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// admin
Route::get('/', 'AdminController@index');
Route::get('admin_layout', 'SuperadminController@index');
Route::get('dashboard', 'SuperadminController@dashboard');
Route::post('admin-dashboard', 'adminController@dashboard');

//users
Route::get('record', 'RecordController@index');
Route::post('/save-record', 'RecordController@save_record');
Route::get('all-record', 'RecordController@all_record');
Route::get('deactive-record/{id}', 'RecordController@deactive_record');
Route::get('active-record/{id}', 'RecordController@active_record');
Route::get('delete-record/{id}', 'RecordController@delete_record');
Route::get('edit-record/{id}', 'RecordController@edit_record');
Route::post('update-record/{id}', 'RecordController@update_record');
