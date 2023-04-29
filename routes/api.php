<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//generate invoice route
Route::post('/generate_invoice/{student_id}/{amount}', 'App\Http\Controllers\InvoiceController@generate_invoice')->name('generate_invoice');

//check invoices route
Route::post('/check_invoices/{student_id}', 'App\Http\Controllers\InvoiceController@check_invoices')->name('check_invoices');
