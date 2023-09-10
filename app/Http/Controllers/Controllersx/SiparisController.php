<?php

namespace App\Http\Controllers\Controllersx;

use App\Http\Controllers\Controllersx\Controller;

class SiparisController extends Controller
{
    public function index()
    {
        return view('siparisler');
   }

    public function detay($id)
    {
  return view('siparis');
   }
}
