<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', 'App\Http\Controllers\AuthController@show')->name('login')->middleware('guest');
Route::post('login', 'App\Http\Controllers\AuthController@authenticate');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout')->middleware('auth:admin,employee');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('employees', 'App\Http\Controllers\EmployeeController@index')->name('employees.index');
    Route::post('employees', 'App\Http\Controllers\EmployeeController@store');
    Route::get('employees/create', 'App\Http\Controllers\EmployeeController@create')->name('employees.create');
    Route::get('employees/datatable', 'App\Http\Controllers\EmployeeController@datatable');
});

Route::middleware(['auth:admin,employee'])->group(function () {
    Route::get('profile', 'App\Http\Controllers\ProfileController@index')->name('profile');
});


Route::get('is-login-admin', function() {
    dd(\Auth::guard('admin')->user());
});

Route::get('is-login-employee', function() {
    dd(\Auth::guard('employee')->user());
});
