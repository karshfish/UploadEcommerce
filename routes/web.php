<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeControlller;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect', [HomeControlller::class, 'redirect']);
Route::get('/', [HomeControlller::class, 'index']);
Route::get('/about', [HomeControlller::class, 'about']);
Route::get('/contact', [HomeControlller::class, 'contact']);
Route::get('/products', [HomeControlller::class, 'products']);