<?php

use App\Models\VaccineForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VaccineController;

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
    return view('index');
})->name("home");

Route::get('/news', function(){
    return view('news');
})->name("news");

Route::get('/vaccination', [VaccineController::class, "index"])->name('vaccine');

Route::post('/vaccination', [VaccineController::class, 'submit'])->name('vaccine.submit');

Route::get('/info', fn()=> view("info"))->name('info');

Auth::routes();

Route::get('/admin/dashboard', [AdminController::class, "index"])->name('dashboard');

Route::get('/admin/data', [AdminController::class, "show"])->name('data');

Route::post('/admin/data', [AdminController::class, "search"])->name('data');

Route::get('/admin/data/download/{id}', [AdminController::class, "download"]);

