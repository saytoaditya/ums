<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('list',[CrudController::class,'list']);
//add user
Route::view('add','add');
Route::post('add',[CrudController::class,'add']);
//delte user
Route::get('delete/{id}',[CrudController::class,'delete']);
//update user
// Route::view('update','update');
Route::post('update',[CrudController::class,'update']);
//to find which id should be upated
Route::get('edit/{id}',[CrudController::class,'edit']);


