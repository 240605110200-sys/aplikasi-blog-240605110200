<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;

class HomeController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with(['penulis','kategori'])
                    ->orderBy('tanggal','desc')
                    ->take(5)
                    ->get();

        $kategori = KategoriArtikel::withCount('artikel')->get();

        return view('home', compact('artikel','kategori'));
    }

    public function semuaArtikel()
{
    $artikel = Artikel::with(['penulis','kategori'])
                ->orderBy('tanggal','desc')
                ->get();

    $kategori = KategoriArtikel::withCount('artikel')->get();

    return view('home', compact(
        'artikel',
        'kategori'
    ));
}

    public function daftarKategori()
    {
        $kategori = KategoriArtikel::withCount('artikel')->get();

        return view('kategori', compact('kategori'));
    }

    public function kategori($id)
    {
        $artikel = Artikel::with(['penulis','kategori'])
                    ->where('id_kategori',$id)
                    ->orderBy('tanggal','desc')
                    ->get();

        $kategori = KategoriArtikel::withCount('artikel')->get();

        $kategoriAktif = KategoriArtikel::findOrFail($id);

        return view('home', compact(
            'artikel',
            'kategori',
            'kategoriAktif'
        ));
    }
}