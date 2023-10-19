<?php

namespace App\Http\Controllers\Controllersx;

class KategoriController extends Controller
{
    public function index($slug_kategoriadi){
        $kategori = Kategori ::where('slug',$slug_kategoriadi)->firstorFail();
        return view('kategori');
    }


}
