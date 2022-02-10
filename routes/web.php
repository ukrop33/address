<?php

use Illuminate\Support\Facades\Redirect;
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

Route::get('/', 'AddressController@index');
Route::post('/', 'AddressController@check');

Route::get('/cancel', function () {
    return redirect('/');
});

Route::post('/save', 'AddressController@save');


/*
Route::get('/', "DadataController@standardizationExample" );
*/
