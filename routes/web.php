<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProductsController;

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
Route::get('companies',function () {
    return view('');

});
Route::get('companias',[CompaniesController::class,'registrosCompanias'])->name('companies.index');
Route::get('productos',[ProductsController::class,'registrosProductos'])->name('products.index');
Route::get('productos/{id}',[ProductsController::class,'show'])->name('products.show');
Route::get('companias/{id}',[CompaniesController::class,'show'])->name('companies.show');
Route::get('productos/{id}/edit',[ProductsController::class,'edit'])->name('products.edit');
Route::get('companias/{id}/edit',[CompaniesController::class,'edit'])->name('companies.edit');
Route::put('productos/{id}',[ProductsController::class,'update'])->name('products.update');
Route::put('companias/{id}',[CompaniesController::class,'update'])->name('companies.update');
Route::get('producto/create',[ProductsController::class,'create'])->name('products.create');
Route::get('compania/create',[CompaniesController::class,'create'])->name('companies.create');
Route::post('productos',[ProductsController::class,'store'])->name('products.store');
Route::post('companias',[CompaniesController::class,'store'])->name('companies.store');
Route::delete('productos/{id}',[ProductsController::class,'destroy'])->name('products.destroy');
Route::delete('companias/{id}',[CompaniesController::class,'destroy'])->name('companies.destroy');
