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

Route::middleware([auth::class])->group(function(){
    Route::get('list',[CrudController::class,'list']);
    Route::view('add','add');
    Route::get('delete/{id}',[CrudController::class,'delete']);
    Route::get('edit/{id}',[CrudController::class,'edit']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();






Route::post('add',[CrudController::class,'add']);
//delte user

//update user
// Route::view('update','update');
Route::post('update',[CrudController::class,'update']);
//to find which id should be upated





