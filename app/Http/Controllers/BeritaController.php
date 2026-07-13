<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function viewDashboard()
    {
        $publishCount = Berita::where('status', 'publish')->count();
        $publikasiIHI = Berita::whereIn('kategori', ['After Class Report', 'Blog', 'Kotak Suara Lingkungan', 'Ekososlab'])->count();
        $beritaGLI = Berita::whereIn('kategori', ['GLI', 'GROW', 'SUAR'])->count();
        $beritaCivic = Berita::where('kategori', 'CIVIC')->count();
        // $beritaYouRings = Berita::where('kategori', 'You Rings')->count();
        // $beritaGreenYouth = Berita::where('kategori', 'Green Youth Movement')->count();
        // $beritaGreenPublic = Berita::where('kategori', 'Green Public Interest Lawyer')->count();
        // $beritaLaboratorium = Berita::where('kategori', 'Laboratorium Keadilan Sosial dan Ekologis')->count();
        // $beritaJurnal = Berita::where('kategori', 'Jurnal Peradaban Hijau')->count();
        return view('admin.dashboard', compact('publishCount', 'publikasiIHI', 'beritaGLI', 'beritaCivic'));
    }

    public function viewBerita()
    {
        $berita = Berita::select('*')
            ->orderBy('tanggal_rilis', 'desc')
            ->get();
        return view('admin.tampilBerita', ['berita' => $berita]);
    }

    public function viewTambahBerita()
    {
        return view('admin.tambahBerita');
    }

    public function tambahBerita(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'ringkasan' => 'required',
            'tanggal' => 'required',
            'editor' => 'required',
            'thumbnail' => 'required|image|max:2048',
            'status' => 'required'
        ]);

        $thumbnail = null;

        if ($request->hasFile('thumbnail')) {
            $folder = 'thumbnail/' . date('Y') . '/' . date('m');
            $file = $request->file('thumbnail');
            $originalName = $file->getClientOriginalName();
            $thumbnail = $file->storeAs(
                $folder,
                $originalName,
                'public'
            );
        }

        Berita::create([
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'slug' => Str::slug($request->judul),
            'ringkasan_berita' => $request->ringkasan,
            'tanggal_rilis' => $request->tanggal,
            'isi_berita' => $request->editor,
            'gambar_berita' => $thumbnail,
            'status' => $request->status
        ]);

        return redirect()
            ->route('viewBerita')
            ->with('success', 'Berita berhasil dibuat');
    }

    public function viewEditBerita($id)
    {
        $berita = Berita::FindOrFail($id);
        return view('admin.editBerita', ['berita' => $berita]);
    }

    public function updateBerita(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'ringkasan' => 'required',
            'tanggal' => 'required',
            'editor' => 'required',
            'thumbnail' => 'nullable|image|max:2048',
            'status' => 'required'
        ]);

        $berita = Berita::findOrFail($id);

        $thumbnail = $berita->gambar_berita;

        if ($request->hasFile('thumbnail')) {
            $folder = 'thumbnail/' . date('Y') . '/' . date('m');
            $file = $request->file('thumbnail');
            $originalName = $file->getClientOriginalName();
            $thumbnail = $file->storeAs(
                $folder,
                $originalName,
                'public'
            );
        }

        $berita->update([
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'slug' => Str::slug($request->judul),
            'ringkasan_berita' => $request->ringkasan,
            'tanggal_rilis' => $request->tanggal,
            'isi_berita' => $request->editor,
            'gambar_berita' => $thumbnail,
            'status' => $request->status
        ]);

        // dd($berita);

        return redirect()
            ->route('viewBerita')
            ->with('success', 'Berita berhasil diperbarui');
    }

    public function hapusBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()
            ->route('viewBerita')
            ->with('success', 'Berita berhasil dihapus');
    }
}
