<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\FasilitasHotelController;
use App\Models\FasilitasHotel;

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
    return view('beforeLogin.home');
});

Route::middleware(['middleware' => 'PreventBackHistory'])->group(function(){
    Auth::routes();
});


// Route::get('/home', [HomeController::class, 'index'])->name('home');
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

Route::resource('pemesananhotel', PemesananController::class);
Route::get('/tipekamar', [DashboardController::class, 'kamar'])->name('kamar');  
Route::get('/fasilitas', [DashboardController::class, 'fasilitas'])->name('fasilitas');  
Route::get('/userKamar', [UserController::class, 'userKamar'])->name('userKamar');  
Route::get('/usertable', [UserController::class, 'usertable'])->name('usertable');  
Route::get('/userFasilitas', [UserController::class, 'userFasilitas'])->name('userFasilitas');  
Route::get('/adminPemesanan', [UserController::class, 'adminPemesanan'])->name('adminPemesanan');  
Route::resource('kamar', KamarController::class);
Route::resource('fasilitashotel', FasilitasHotelController::class);

Route::get('downloadpdfkamar', [KamarController::class, 'downloadpdf'])->name('downloadpdf');
Route::get('downloadpdffasilitashhotel', [FasilitasHotelController::class, 'downloadpdf'])->name('downloadpdf');
Route::get('downloadpdfpemesanan', [PemesananController::class, 'downloadpdf'])->name('downloadpdf');