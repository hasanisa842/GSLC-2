<?php

use App\Http\Controllers\Items;
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

Route::get('/', [Items::class, 'index']);

Route::get('/insert', function() {
    return view('insert');
});

Route::post('/insert', [Items::class, 'insert']);