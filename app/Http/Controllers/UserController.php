<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = Berita::select('*')
            ->where('status', 'publish')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('index', ['data' => $data]);
    }

    public function viewLogin()
    {
        return view('admin.user.login');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->route('viewDashboard');
        }

        return back()->with('error', 'Username atau Password salah.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function tentangKami()
    {
        return view('tentang-kami');
    }

    public function tim()
    {
        return view('tim');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function publikasi()
    {
        $data = Berita::select('*')
            ->where('status', 'publish')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('publikasi', ['data' => $data]);
        // return view('publikasi');
    }

    public function viewDetailPublikasi($slug)
    {
        $data = Berita::select('*')
            ->where('slug', $slug)
            ->where('status', 'publish')
            ->get();

        $dataBerita = Berita::select('*')
            ->where('status', 'publish')
            ->limit(10)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('detailPublikasi', ['data' => $data, 'dataBerita' => $dataBerita]);
    }

    public function kontakKami()
    {
        return view('kontak-kami');
    }

    public function greenLeadership()
    {

        return view('program-kami.green-leader.index');
    }

    public function civicEducation()
    {
        return view('program-kami.civic-edu.index');
    }

    public function youRings()
    {
        return view('program-kami.you-rings.index');
    }
}
