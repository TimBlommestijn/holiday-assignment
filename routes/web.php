<?php

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
// onnodige route

use App\Http\Controllers\ContactController;

Route::get('/hello/hello', function () {
    return 'hello';
});
// routes maken reference naar de controller
Route::get('/', 'ContactController@index');
Route::get('/about', 'PageController@about');
Route::get('/contact', 'PageController@contact');
Route::post('/contact', 'ContactController@store');
Route::get('/update/contact/{id}', "ContactController@findContactUpdate");
Route::post('/update/contact/{id}', 'ContactController@updateContact');
Route::delete('/delete/contact/{id}', 'ContactController@destroyContact');