<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengurus;
use App\Models\Speaker;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function viewGLI()
    {
        $speaker = Speaker::select('*')->where('kategori', 'GLI')->get();
        $kategori = ['GROW', 'GLI', 'SUAR', 'After Class Report'];
        $berita = Berita::select('*')
            ->whereIn('kategori', $kategori)
            ->orderBy('tanggal_rilis', 'desc')
            ->limit(6)
            ->get();

        return view('program-kami.green-leader.index', [
            'berita' => $berita,
            'speaker' => $speaker
        ]);
    }

    public function viewAllBeritaGLI()
    {
        $kategori = ['GROW', 'GLI', 'SUAR', 'After Class Report'];
        $berita = Berita::select('*')
            ->whereIn('kategori', $kategori)
            ->orderBy('tanggal_rilis', 'desc')
            ->get();

        return view('program-kami.green-leader.berita_gli', [
            'berita' => $berita
        ]);
    }

    // public function viewBeritaGLI($slug)
    // {
    //     $berita = Berita::select('*')
    //         ->where('slug', $slug)
    //         ->get();

    //     $kategori = ['GROW', 'GLI', 'SUAR', 'After Class Report'];
    //     $beritaFull = Berita::select('*')
    //         ->whereIn('kategori', $kategori)
    //         ->orderBy('tanggal_rilis', 'desc')
    //         ->get();

    //     return view('program-kami.green-leader.berita_gli', [
    //         'berita' => $berita,
    //         'beritaFull' => $beritaFull
    //     ]);
    // }

    public function viewDetailBerita($slug)
    {
        $berita = Berita::select('*')
            ->where('slug', $slug)
            ->get();

        $dataBerita = Berita::select('*')
            ->whereIn('kategori', ['GROW', 'GLI', 'SUAR'])
            ->orderBy('tanggal_rilis', 'desc')
            ->limit(10)
            ->get();

        return view('program-kami.green-leader.detailBeritaGLI', [
            'berita' => $berita,
            'dataBerita' => $dataBerita
        ]);
    }

    public function viewTimGLI()
    {
        $oc = Pengurus::where('kode', 'oc')->get();
        $weavers = Pengurus::where('kode', 'weavers')->get();
        $koreg = Pengurus::where('kode', 'koreg')->get();
        $star = Pengurus::where('kode', 'star')->get();
        $builders = Pengurus::where('kode', 'builders')->get();
        $fasil = Pengurus::where('kode', 'fasil')->get();
        return view(
            'program-kami.green-leader.tim_gli',
            [
                'oc' => $oc,
                'weavers' => $weavers,
                'koreg' => $koreg,
                'star' => $star,
                'builders' => $builders,
                'fasil' => $fasil
            ]
        );
    }
}
