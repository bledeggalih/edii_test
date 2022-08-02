<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return redirect('/login');
});

Auth::routes();

Route::match(['post','get'],'/add-entity', [HomeController::class, 'addEntity'])->name('add.entity');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['admin']], function () {
   Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
   Route::get('/view-entity', [HomeController::class, 'viewEntity'])->name('view.entity');
});
