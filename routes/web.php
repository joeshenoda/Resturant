<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\OrderController;
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
use Illuminate\Support\Facades\Auth;
require_once 'dashboard.php';
require_once 'employee.php';



Route::get('/', function () {
    return view('front.home');
});




Route::middleware(['guest'])->group(function (){

    Route::get('/','App\Http\Controllers\Auth\UserController@login');

    Route::get('/register','App\Http\Controllers\Auth\UserController@register')->name('register');




});


Route::middleware(['auth'])->group(function (){
    Route::get('/logout', 'App\Http\Controllers\Auth\UserController@logout')->name('logout');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');

    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    Route::put('update/profile', [App\Http\Controllers\HomeController::class, 'update'])->name('profile.update');









    Route::get('/table', [TableController::class,"index"])->name('tables');
    Route::get('table/search', [TableController::class,"search"])->name('tables.search');
    Route::get('/table/{table}', [TableController::class,"show"])->name('table.show');


    Route::get('/orders', [OrderController::class,"index"])->name('orders');
    Route::get('/order/{order}', [OrderController::class,"show"])->name('order.show');
    Route::post('/order/store', [OrderController::class,"store"])->name('order.store');
});








Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale');
