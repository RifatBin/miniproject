<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [CategoryController::class, 'Categorylist'])->name('/');
Route::get('/add', [CategoryController::class, 'addcategory'])->name('add');
Route::post('/add/store', [CategoryController::class, 'store'])->name('add.store');
Route::get('/add/{id}/viewSingle', [CategoryController::class, 'viewSingle'])->name('viewSingle');
Route::get('edit/{id}',[CategoryController::class,'editCategory'])->name('edit');
Route::patch('update/{id}',[CategoryController::class,'updateCategory'])->name('update');
