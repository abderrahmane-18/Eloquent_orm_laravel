<?php

use App\Http\Controllers\commentController;
use App\Http\Controllers\produitController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('comments/index',[commentController::class,'index']);
Route::post('comments/insert',[commentController::class,'insert'])->name('comments.insert');
Route::get('comments/create',[commentController::class,'create'])->name('comments.create');
Route::delete('comments/destroy/{id}',[commentController::class,'destroy'])->name('comments.destroy');
Route::get('comments/softdelete',[commentController::class,'show'])->name('comments.softdelete');
Route::get('comments/destroyed/{id}',[commentController::class,'destroy1'])->name('comments.destroyed');
Route::get('comments/restore/{id}',[commentController::class,'restore'])->name('comments.restore');
Route::get('comments/display',[ commentController::class,'display'])->name('comments.display');
Route::resource('produits',produitController::class);

