<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function tampilbahan()
    {
        return view('tampilbahan');
    }

    public function tambahbahan()
    {
        return view('tambahbahan');
    }
}
