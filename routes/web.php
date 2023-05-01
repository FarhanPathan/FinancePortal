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

//find invoice route
Route::post('/find_invoice', 'App\Http\Controllers\InvoiceController@find_invoice')->name('find_invoice');

//pay invoice route
Route::post('/pay_invoice', 'App\Http\Controllers\InvoiceController@pay_invoice')->name('pay_invoice');


Route::post('/generate_invoice', 'App\Http\Controllers\InvoiceController@generate_invoice')->name('generate_invoice');