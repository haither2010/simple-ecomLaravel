<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\userController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    session()->forget('user');
    return view('login');
});

Route::post('/login', [userController::class, 'login'])->name('loginController');
Route::get('/', [ProductController::class, 'index'])->name('product.index');
Route::get('/details/{id}', [ProductController::class, 'details']);

Route::post('search', [ProductController::class, 'search'])->name('product.search');
Route::post('addtocart', [ProductController::class, 'addtocart'])->name('product.add');