<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class CivicController extends Controller
{
    public function viewCivic()
    {
        return view('program-kami.civic-edu.index');
    }

    public function viewAllBeritaCivic()
    {
        $berita = Berita::select('*')
            ->where('kategori', 'CIVIC')
            ->orderBy('tanggal_rilis', 'desc')
            ->get();
        return view('program-kami.civic-edu.berita_civic', ['berita' => $berita]);
    }

    public function viewDetailBeritaCivic($slug)
    {
        $berita = Berita::select('*')
            ->where('slug', $slug)
            ->get();

        $dataBerita = Berita::select('*')
            ->where('kategori', 'CIVIC')
            ->orderBy('tanggal_rilis', 'desc')
            ->limit(10)
            ->get();

        return view('program-kami.civic-edu.detailBeritaCivic', [
            'berita' => $berita,
            'dataBerita' => $dataBerita
        ]);
    }

    public function viewTimCivic()
    {
        $fasil = Pengurus::where('kode', 'fasil-civic')->get();
        return view('program-kami.civic-edu.tim_civic', ['fasil' => $fasil]);
    }
}
