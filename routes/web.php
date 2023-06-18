<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home');
});

// Route::get('/product', function  () {
//     return view('product');
// });
 
Route::resource('products', ProductController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
