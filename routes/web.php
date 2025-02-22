<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin')->group(function () {
    Route::resource('/manager', 'MenageUsersController', ['except' => ['show', 'create', 'store']]);
});

Route::get('/People', [\App\Http\Controllers\PeopleController::class, 'index']);
Route::post('/People/store', [\App\Http\Controllers\PeopleController::class, 'store']);

Route::get('/Employees', [\App\Http\Controllers\EmployeesController::class, 'index']);
Route::post('/Employees/store', [\App\Http\Controllers\EmployeesController::class, 'store']);
