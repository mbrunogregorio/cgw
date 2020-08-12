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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'PagesController@home');
Route::get('/produtos/{slug?}', 'PagesController@produtos')->name('produtos');
Route::get('/downloads', 'PagesController@downloads')->name('downloads');
Route::get('/contato', 'PagesController@contato')->name('contato');
Route::get('/rebolos', 'PagesController@rebolos')->name('rebolos');

