<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;

Route::get('/', [HomeController::class,'index']);

Route::get('/artikel',
    [HomeController::class,'semuaArtikel']
);

Route::get('/artikel/{id}',
    [ArtikelController::class,'detail']
);

Route::get('/kategori',
    [HomeController::class,'daftarKategori']
);

Route::get('/kategori/{id}',
    [HomeController::class,'kategori']
);

Route::view('/tentang','tentang');