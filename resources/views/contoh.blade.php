<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Galeri Logo Responsif | Hover Zoom In & Out</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(145deg, #f6f9fc 0%, #eef2f5 100%);
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 1.5rem;
        }

        /* Container utama dengan pendekatan modern */
        .logo-gallery {
            max-width: 1300px;
            width: 100%;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(0px);
            border-radius: 3rem;
            padding: 2rem 1.8rem;
            box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.2);
            transition: all 0.2s ease;
        }

        /* Judul kecil untuk kesan elegan */
        .gallery-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .gallery-header h1 {
            font-size: 1.9rem;
            font-weight: 600;
            background: linear-gradient(135deg, #1F2A3A, #2C3E50);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: -0.3px;
        }

        .gallery-header p {
            color: #5a6874;
            margin-top: 0.5rem;
            font-weight: 400;
        }

        /* GRID: 2 baris, baris pertama 4 item, baris kedua 3 item */
        /* Pendekatan fleksibel dengan CSS Grid, responsif sempurna */
        .logo-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            /* default: 4 kolom */
            gap: 1.8rem;
            justify-items: center;
            align-items: center;
        }

        /* Item logo dasar */
        .logo-item {
            width: 100%;
            max-width: 260px;
            background: white;
            border-radius: 2rem;
            padding: 1.6rem 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 12px 28px -8px rgba(0, 0, 0, 0.08);
            transition: all 0.25s ease;
            cursor: pointer;
            backdrop-filter: blur(2px);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }

        /* Gaya untuk gambar / logo (SVG atau teks/ikon) */
        .logo-img {
            width: 100%;
            max-width: 150px;
            height: auto;
            transition: transform 0.35s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            display: block;
            object-fit: contain;
        }

        /* Efek HOVER Zoom In + Zoom Out (animasi kustom) */
        /* zoom in: scale naik jadi 1.12, zoom out: kembali scale 1 */
        .logo-item:hover .logo-img {
            animation: logoZoomBounce 0.4s ease-in-out forwards;
        }

        /* Keyframes untuk zoom in lalu stabil, tapi agar terasa "zoom in & zoom out"
           kita buat animasi: scale membesar (zoom in), lalu sedikit kembali (zoom out effect)
           namun tetap pada posisi membesar? tidak, sesuai permintaan "animasi hover zoom in dan zoom out"
           umumnya: saat hover membesar, saat keluar mengecil. tapi diperjelas: 
           kita akan memberikan efek zoom in ketika mouse masuk, dan zoom out ketika mouse keluar (transition balik)
           plus sentuhan animasi berulang? lebih tepat: gunakan transisi dasar, tapi agar lebih hidup
           kita buat efek tambahan: ketika hover membesar 1.12x (zoom in), lalu ketika mouse leave kembali ke 1 (zoom out)
           dengan timing smooth. serta tambahan sedikit scaling effect di awal hover agar "zoom in" terasa playful.
           Untuk memenuhi "zoom in dan zoom out" secara visual, saya sertakan pulse singkat? 
           sesuai keinginan: hover => zoom in (scale up), leave => zoom out (scale down)
        */

        /* alternatif: gunakan transition biasa pada .logo-img, lalu hover scale.
           Itu sudah mencakup zoom in (hover) dan zoom out (leave). 
           Namun agar lebih kaya, kita tambah sedikit efek transisi yang halus.
        */

        /* Pendekatan final: transisi dasar + hover scaling, didukung performa */
        .logo-img {
            transition: transform 0.35s cubic-bezier(0.2, 0.85, 0.4, 1);
            transform: scale(1);
        }

        .logo-item:hover .logo-img {
            transform: scale(1.12);
            /* Zoom In saat hover */
        }

        /* Tambahan sentuhan : untuk efek "keluar" sudah otomatis zoom out (scale kembali ke 1) */
        /* Namun kita inginkan ada 'zoom out' animation yang terlihat? dengan transisi standar sudah cukup.
           Untuk memberi kesan lebih dinamis, kita tambahkan efek bayangan dan transisi pada item */

        .logo-item:hover {
            box-shadow: 0 22px 35px -12px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
            background: white;
            border-color: #cbdde9;
        }

        /* penyesuaian logo berupa teks atau ikon buatan (karena logo asli bisa berupa SVG / FontAwesome / teks) */
        /* Agar lebih menarik, kita buat beragam contoh logo modern (menggunakan Font Awesome gratis dari CDN) */
        /* Serta beberapa logo berupa teks bergaya brand untuk memenuhi 7 item */

        /* Gaya alternatif jika gambar tidak ada, atau menggunakan elemen vector */
        .custom-logo-svg {
            width: 120px;
            height: auto;
        }

        /* responsif: untuk layar tablet, pastikan tetap rapi */
        @media (max-width: 950px) {
            .logo-grid {
                gap: 1.2rem;
            }

            .logo-item {
                padding: 1.2rem 0.8rem;
            }

            .gallery-header h1 {
                font-size: 1.6rem;
            }
        }

        /* di layar menengah (max 800px), grid masih 4 kolom, tapi logo-item max-width menyesuaikan */
        @media (max-width: 780px) {
            .logo-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 1rem;
            }

            .logo-img {
                max-width: 110px;
            }
        }

        /* Pada layar kecil (max 640px), baris pertama 4 logo & kedua 3 logo tetap, 
           tapi kita ubah menjadi 2 kolom? TIDAK, karena permintaan khusus: tetap 2 baris 
           (baris1: 4 logo, baris2: 3 logo). Maka pakai grid dengan 4 kolom di semua ukuran,
           namun di HP kecil mungkin terlalu sempit? Kita gunakan media query untuk memastikan 
           item tetap rapi. Mengingat kontennya logo, kita override agar tampil proporsional.
           Lebih baik: pada max-width 600px, grid-template-columns diatur ulang secara manual?
           Tapi karena permintaan spesifik 2 baris (4 dan 3) secara visual, sebaiknya tetap menggunakan
           grid 4 kolom, dan baris ke-2 hanya mengisi 3 item, sisanya kosong? Tidak, kita tempatkan 7 item,
           secara otomatis di grid 4 kolom : baris1 = 4 item, baris2 = 3 item (sempurna).
           Namun di layar sangat kecil (480px) agar tidak terlalu sempit, kita kurangi padding dan ukuran font.
        */
        @media (max-width: 550px) {
            .logo-gallery {
                padding: 1.5rem 1rem;
            }

            .logo-grid {
                gap: 0.9rem;
            }

            .logo-item {
                padding: 0.9rem 0.5rem;
                border-radius: 1.5rem;
            }

            .logo-img {
                max-width: 85px;
            }

            .custom-logo-svg {
                width: 80px;
            }
        }

        @media (max-width: 420px) {
            .logo-img {
                max-width: 70px;
            }

            .logo-item {
                padding: 0.7rem 0.3rem;
            }

            .gallery-header h1 {
                font-size: 1.3rem;
            }
        }

        /* Penataan untuk teks logo alternatif (jika ingin bentuk unik) */
        .text-logo {
            font-weight: 800;
            font-size: 1.8rem;
            background: linear-gradient(125deg, #2b5876, #4e4376);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: -0.5px;
            transition: all 0.2s;
        }

        .logo-item:hover .text-logo {
            background: linear-gradient(125deg, #f12711, #f5af19);
            background-clip: text;
            -webkit-background-clip: text;
        }

        /* ikon khusus dengan font awesome (kami sertakan CDN) */
        .fa-logo {
            font-size: 4rem;
            color: #1e466e;
            transition: all 0.2s;
        }

        .logo-item:hover .fa-logo {
            color: #e67e22;
            transform: scale(1.05);
        }

        /* sederhanakan style gambar SVG agar konsisten */
        img.logo-img {
            pointer-events: none;
        }

        footer {
            text-align: center;
            margin-top: 2.5rem;
            font-size: 0.8rem;
            color: #6c7a89;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            padding-top: 1.5rem;
        }

        /* Animasi tambahan sentuhan kecil untuk memperkuat zoom in-out */
        /* sebenarnya hover scale sudah cukup, namun kita akan berikan efek transisi yg lebih mulus */
    </style>
    <!-- Font Awesome 6 (free) untuk ikon logo yang variatif -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <div class="logo-gallery">
        <div class="gallery-header">
            <h1>✨ Koleksi Logo Creative</h1>
            <p>Hover pada logo → efek zoom in & zoom out halus | 2 baris (4 + 3)</p>
        </div>

        <div class="logo-grid">
            <!-- Logo 1 (Baris 1, kolom 1) -->
            <div class="logo-item">
                <div class="logo-img">
                    <i class="fab fa-react fa-4x fa-logo"></i>
                </div>
            </div>

            <!-- Logo 2 (Baris 1, kolom 2) -> menggunakan gambar SVG data uri modern -->
            <div class="logo-item">
                <div class="logo-img">
                    <svg class="custom-logo-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="45" fill="url(#grad1)" stroke="#2C3E50" stroke-width="2" />
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#FF6B6B" />
                                <stop offset="100%" stop-color="#556270" />
                            </linearGradient>
                        </defs>
                        <path d="M32 50 L68 50 M50 32 L50 68" stroke="white" stroke-width="6" stroke-linecap="round" />
                        <circle cx="50" cy="50" r="12" fill="white" stroke="#2C3E50" stroke-width="3" />
                    </svg>
                </div>
            </div>

            <!-- Logo 3 (Baris 1, kolom 3) -> icon brand vue -->
            <div class="logo-item">
                <div class="logo-img">
                    <i class="fab fa-vuejs fa-4x fa-logo" style="color:#42b883;"></i>
                </div>
            </div>

            <!-- Logo 4 (Baris 1, kolom 4) -> Logo teks kreatif dengan style modern -->
            <div class="logo-item">
                <div class="logo-img text-logo" style="font-size:2rem; font-weight:800;">
                    LUMINA
                </div>
            </div>

            <!-- Logo 5 (Baris 2, kolom 1) -> gambar CSS murni (bentuk diamond) atau svg dinamis -->
            <div class="logo-item">
                <div class="logo-img">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="20" y="20" width="60" height="60" rx="15" fill="#3B82F6" />
                        <path d="M40 40 L60 60 M60 40 L40 60" stroke="white" stroke-width="5" stroke-linecap="round" />
                        <circle cx="50" cy="50" r="10" fill="white" />
                    </svg>
                </div>
            </div>

            <!-- Logo 6 (Baris 2, kolom 2) -> angular logo dari fontawesome -->
            <div class="logo-item">
                <div class="logo-img">
                    <i class="fab fa-angular fa-4x fa-logo" style="color:#c3002f;"></i>
                </div>
            </div>

            <!-- Logo 7 (Baris 2, kolom 3) -> Logo berupa globe modern -->
            <div class="logo-item">
                <div class="logo-img">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="40" fill="#1E293B" stroke="#F59E0B" stroke-width="3" />
                        <ellipse cx="50" cy="50" rx="20" ry="40" stroke="#FCD34D" stroke-width="2.5" fill="none" />
                        <ellipse cx="50" cy="50" rx="40" ry="20" stroke="#FCD34D" stroke-width="2.5" fill="none" />
                        <circle cx="50" cy="50" r="6" fill="#F59E0B" />
                    </svg>
                </div>
            </div>
        </div>
        <footer>
            ⚡ 7 logo unik • Baris pertama: 4 item • Baris kedua: 3 item • Efek hover : zoom in (scale 1.12) & zoom out (scale 1) dengan transisi halus
        </footer>
    </div>

    <!-- Penjelasan tambahan: 
     Tampilan responsive menggunakan grid 4 kolom. Karena total logo 7, otomatis baris pertama 4 logo, 
     baris kedua 3 logo. Semua logo memiliki class .logo-img yang diberi transisi transform 0.35s.
     Pada hover .logo-item, .logo-img akan scale(1.12) (zoom in) dan ketika mouse leave kembali scale(1) => zoom out.
     Efek ini memenuhi animasi zoom in dan zoom out persis saat interaksi hover.
     Didukung pula efek bayangan dan transisi untuk meningkatkan pengalaman visual.
     Setiap logo menggunakan ikon, SVG kustom, teks brand, ataupun font awesome, membuat tampilan menarik.
     Ukuran grid menyesuaikan dari desktop hingga layar ponsel (responsif).
-->
</body>

</html>