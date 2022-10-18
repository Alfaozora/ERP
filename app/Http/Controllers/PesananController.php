<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function tampilpesanan()
    {
        return view('tampilpesanan');
    }

    public function tambahpesanan()
    {
        return view('tambahpesanan');
    }
}
