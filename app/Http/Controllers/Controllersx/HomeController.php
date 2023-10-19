<?php

namespace App\Http\Controllers\Controllersx;
use App\Models\Kategori;
class HomeController extends Controller
{
    public function  index(){
        $kategoriler = Kategori::whereRaw('ust_id is null')->take(8)->get();
        return view('anasayfa',compact('kategoriler'));
    }
}
