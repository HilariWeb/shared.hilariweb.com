<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivoController;

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

//Auth::routes();

//desactiva el registro de usuarios
Auth::routes(["register" => false]);


Route::get('/archivos/admin', function () { return view('archivos.admin'); });
Route::get('/archivos/datatable', function () { return view('archivos.datatable'); });

//Route::get('/archivos', 'ArchivoController@index')->name('index');
//Route::get('/archivos/', 'HomeController@index')->name('home');

//Route::get('/archivos',[App\Http\Controllers\ArchivoController::class, 'index']);

Route::resource('archivos','ArchivoController')->middleware('auth');
Route::resource('books','BookController')->middleware('auth');

Route::get('/', 'ArchivoController@index')->name('index')->middleware('auth');
//Route::get('/create', 'ArchivoController@create')->name('create');
