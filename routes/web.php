<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

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
    return view('index');
});
Route::get('/about', function(){
    return view('about');
});

Route::post('/upload', 'Admin\UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('trucks', 'Truckcontroller');

Route::resource('scan', 'OrderTruckController');
Route::post('scan/search', 'OrderTruckController@scan')->name('scan.search');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function()
{
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

