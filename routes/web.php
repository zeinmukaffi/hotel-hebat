<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\FasilitasHotelController;

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

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function(){
    Auth::routes();
});


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/book', [HomeController::class, 'book'])->name('book');  

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::group(['prefix' => 'resepsionis', 'middleware' => ['isResepsionis', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [ResepsionisController::class, 'index'])->name('resepsionis.dashboard');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth', 'PreventBackHistory']], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

Route::resource('kamar',KamarController::class);
Route::resource('fasilitashotel', FasilitasHotelController::class);