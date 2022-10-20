<?php

namespace App\Http\Controllers;

use App\Models\bahan_baku;
use Illuminate\Http\Request;
use Alert;

class BahanbakuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahans = bahan_baku::latest()->paginate(5);
        return view('tampilbahan', compact('bahans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahbahan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $masuk = bahan_baku::create($request->all());
        if ($masuk) {
            Alert::success('Data Berhasil Ditambahkan', 'Selamat');
            return redirect()->route('bahan.index');
        } else {
            Alert::error('Data Gagal Ditambahkan', 'Maaf');
            return redirect()->route('bahan.create');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bahan_baku  $bahan_baku
     * @return \Illuminate\Http\Response
     */
    public function edit(bahan_baku $bahan_baku)
    {
        $bahans = bahan_baku::find($bahan_baku->id);
        return view('editbahan', compact('bahans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bahan_baku  $bahan_baku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bahan_baku $bahan_baku)
    {
        $bahans = bahan_baku::find($bahan_baku);
        $bahans->nama_bahan = $request->nama_bahan;
        $bahans->jumlah = $request->jumlah;
        $bahans->satuan = $request->satuan;
        $bahans->harga = $request->harga;
        $bahans->save();
        if ($bahans) {
            Alert::success('Data Berhasil Diubah', 'Selamat');
            return redirect()->route('bahan.index');
        } else {
            Alert::error('Data Gagal Diubah', 'Maaf');
            return redirect()->route('bahan.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bahan_baku  $bahan_baku
     * @return \Illuminate\Http\Response
     */
    public function destroy(bahan_baku $bahan_baku)
    {
        $bahans = bahan_baku::find($bahan_baku);
        $bahans->delete();
        if ($bahans) {
            Alert::success('Data Berhasil Dihapus', 'Selamat');
            return redirect()->route('bahan.index');
        } else {
            Alert::error('Data Gagal Dihapus', 'Maaf');
            return redirect()->route('bahan.index');
        }
    }
}
