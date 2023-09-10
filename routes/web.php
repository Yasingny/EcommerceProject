<?php

use App\Http\Controllers\Controllersx\HomeController;
use App\Http\Controllers\Controllersx\KategoriController;
use App\Http\Controllers\Controllersx\KullaniciController;
use App\Http\Controllers\Controllersx\OdemeController;
use App\Http\Controllers\Controllersx\SepetController;
use App\Http\Controllers\Controllersx\SiparisController;
use App\Http\Controllers\Controllersx\UrunController;
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



//Route yapılanmasında Countroller kullanımı
//Route::get('/',[HomeController::class,'index']);

Route::get('/',[HomeController::class,'index'])->name('anasayfa');

Route::get('/kategori/{slug_kategori_adi}',[KategoriController::class,'index'])->name('kategori');

Route::get('/urun/{slug_uruni_adi}',[UrunController::class,'index'])->name('urun');

Route::get('/sepet/',[SepetController::class,'index'])->name('sepet');

Route::get('/odeme/',[OdemeController ::class,'index'])->name('odeme');

Route::get('/siparisler',[siparisController::class,'index'])->name('siparisler');

Route::get('/siparisler/{id}',[siparisController::class,'detay'])->name('siparis');

Route::group(['prefix'=>'/kullanici'], function (){
    Route::get('kullanici/oturumac',[KullaniciController::class,'giris_form'])->name('kullanici.oturumac');
    Route::get('kullanici/kaydol',[KullaniciController::class,'kayit_form'])->name('kullanici.kaydol');
});




