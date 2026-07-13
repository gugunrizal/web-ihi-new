<?php

use App\Http\Controllers\CivicController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JoditController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Login User
Route::get('/login', [UserController::class, 'viewLogin'])->name('viewLogin');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Admin Dashboard
// Route::get('/admin', [UserController::class, 'dashboard'])->name('viewDashboard');
Route::prefix('/admin')->middleware('admin')->controller(BeritaController::class)->group(function () {
    Route::get('/', 'viewDashboard')->name('viewDashboard');
    Route::get('/berita', 'viewBerita')->name('viewBerita');
    Route::get('/tambah-berita', 'viewTambahBerita')->name('viewTambahBerita');
    Route::post('/tambah-berita/add', 'tambahBerita')->name('tambahBerita');
    Route::get('/edit-berita/{id}', 'viewEditBerita')->name('viewEditBerita');
    Route::put('/edit-berita/{id}', 'updateBerita')->name('updateBerita');
    Route::get('/hapus-berita/{id}', 'hapusBerita')->name('hapusBerita');
});

Route::post('/jodit/upload', [JoditController::class, 'upload'])->name('jodit.upload');

// Route::prefix('admin')->middleware('auth')->group(function () {

// Route::resource('berita', BeritaController::class);

//     Route::post(
//         '/jodit/upload',
//         [JoditController::class, 'upload']
//     )->name('jodit.upload');
// });

Route::prefix('/')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('viewHome');
    Route::get('/tentang-kami', 'tentangKami')->name('viewTentangKami');
    Route::get('/tim', 'tim')->name('viewTim');
    Route::get('/galeri', 'galeri')->name('viewGaleri');
    Route::get('/publikasi', 'publikasi')->name('viewPublikasi');
    Route::get('/kontak-kami', 'kontakKami')->name('viewKontakKami');
    Route::get('/publikasi/{slug}', 'viewDetailPublikasi')->name('viewDetailPublikasi');

    // Program Kami routes
    // Route::get('/green-leadership', 'greenLeadership')->name('viewGreenLeadership');
    Route::get('/civic-education', 'civicEducation')->name('viewCivicEducation');
    Route::get('/you-rings', 'youRings')->name('viewYouRings');
    Route::get('/green-youth-movement', 'greenYouthMovement')->name('viewGreenYouthMovement');
    Route::get('/green-public-interest-lawyer', 'greenPublicInterestLawyer')->name('viewGreenPublicInterestLawyer');
    Route::get('/laboratorium-keadilan-sosial', 'laboratoriumKeadilanSosial')->name('viewLaboratoriumKeadilanSosialDanEkologis');
    Route::get('/jurnal-peradaban-hijau', 'jurnalPeradabanHijau')->name('viewJurnalPeradabanHijau');
});

// Program GLI
Route::prefix('/green-leadership')->controller(LeaderController::class)->group(function () {
    Route::get('/', 'viewGLI')->name('viewGreenLeadership');
    Route::get('/berita', 'viewAllBeritaGLI')->name('viewAllBeritaGLI');
    // Route::get('/berita/{slug}', 'viewBeritaGLI')->name('viewBeritaGLI');
    Route::get('/berita/{slug}', 'viewDetailBerita')->name('viewDetailBerita');
    Route::get('/tim', 'viewTimGLI')->name('viewTimGLI');
});

// Program Civic Education
Route::prefix('/civic-education')->controller(CivicController::class)->group(function () {
    Route::get('/', 'viewCivic')->name('viewCivicEducation');
    Route::get('/berita', 'viewAllBeritaCivic')->name('viewAllBeritaCivic');
    Route::get('/berita/{slug}', 'viewDetailBeritaCivic')->name('viewDetailBeritaCivic');
    Route::get('/tim', 'viewTimCivic')->name('viewTimCivic');
});

Route::get('/contoh', function () {
    return view('contoh');
});
