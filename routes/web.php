<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "ini halaman utama";
});
Route::prefix('kategori')->group(function () {
    Route::get('/produk1', function () {
        return "ini produk1";
    }
    );
    Route::get('/produk2', function () {
        return "ini produk2";
    }
    );
    Route::get('/produk3', function () {
        return "ini produk3";
    }
    );
    Route::get('/produk4', function () {
        return "ini produk4";
    }
    );
});
Route::prefix('berita')->group(function () {
    Route::get('/', function () {
        return "ini halaman berita";
    }
    );
    Route::get('/{id}',[BeritaController::class, ('berita')]
    );
});
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        return "ini program karir";
    }
    );
    Route::get('/magang', function () {
        return "ini program magang";
    }
    );
    Route::get('/industri', function () {
        return "ini program industri";
    }
    );
    
});
Route::get('about-us', function (){
    return "ini about-us";
});
Route::resource('contact', ContactController::class);