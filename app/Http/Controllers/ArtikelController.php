<?php

namespace App\Http\Controllers;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function detail($id)
    {
        $artikel = Artikel::with(['penulis','kategori'])
                    ->findOrFail($id);

        $terkait = Artikel::where('id_kategori',$artikel->id_kategori)
                    ->where('id','!=',$id)
                    ->take(5)
                    ->get();

        return view('detail', compact('artikel','terkait'));
    }
}