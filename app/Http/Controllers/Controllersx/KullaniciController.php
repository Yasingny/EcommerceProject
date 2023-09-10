<?php

namespace App\Http\Controllers\Controllersx;

use App\Http\Controllers\Controllersx;

class KullaniciController extends Controller
{
    public function giris_form()
    {
       return view('kullanici.oturumac');
    }

    public function kayit_form()
    {
        return view('kullanici.kayit');
    }
}
