<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institut Hijau Indonesia | Maintenance</title>
    <!-- Font & Ikon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,600;14..32,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(145deg, #f0f9f0 0%, #d4e8d4 100%);
            padding: 1.5rem;
            position: relative;
        }

        /* efek daun latar (dekoratif) */
        body::before {
            content: "🌿";
            position: absolute;
            font-size: 20rem;
            opacity: 0.03;
            bottom: -5%;
            right: -5%;
            transform: rotate(15deg);
            pointer-events: none;
        }

        body::after {
            content: "🍃";
            position: absolute;
            font-size: 12rem;
            opacity: 0.03;
            top: -2%;
            left: -2%;
            transform: rotate(-20deg);
            pointer-events: none;
        }

        .maintenance-card {
            max-width: 780px;
            width: 100%;
            background: rgba(255, 255, 255, 0.80);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 3.5rem;
            padding: 3rem 2.5rem;
            box-shadow: 0 30px 60px rgba(0, 40, 0, 0.15),
                0 10px 20px rgba(0, 20, 0, 0.05),
                inset 0 1px 0 rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(60, 130, 60, 0.15);
            text-align: center;
            transition: all 0.2s ease;
            position: relative;
            z-index: 2;
        }

        /* ikon utama + animasi */
        .icon-wrapper {
            display: inline-block;
            background: #1f4f2b;
            padding: 1.2rem 1.5rem;
            border-radius: 80px;
            margin-bottom: 1.8rem;
            box-shadow: 0 12px 24px -8px rgba(20, 70, 20, 0.3);
        }

        .icon-wrapper i {
            font-size: 4rem;
            color: #d4edb0;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
            animation: pulse-icon 2s infinite ease-in-out;
        }

        @keyframes pulse-icon {
            0% {
                transform: scale(1) rotate(0deg);
            }

            50% {
                transform: scale(1.08) rotate(4deg);
            }

            100% {
                transform: scale(1) rotate(0deg);
            }
        }

        h1 {
            font-size: 2.6rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            color: #1a3a1f;
            margin-bottom: 0.5rem;
        }

        .subhead {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2b5e2b;
            background: rgba(60, 130, 60, 0.08);
            display: inline-block;
            padding: 0.4rem 1.8rem;
            border-radius: 40px;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(60, 130, 60, 0.15);
            margin-bottom: 1.8rem;
        }

        .status-message {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #1e3d22;
            background: rgba(255, 255, 255, 0.5);
            padding: 1rem 1.8rem;
            border-radius: 60px;
            display: inline-block;
            backdrop-filter: blur(2px);
            border: 1px solid rgba(80, 140, 80, 0.2);
            margin-bottom: 1.8rem;
            font-weight: 450;
        }

        .status-message i {
            color: #2d7a2d;
            margin-right: 0.6rem;
        }

        .progress-area {
            margin: 2rem 0 2.4rem;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            font-weight: 600;
            color: #1d4a1d;
            letter-spacing: 0.3px;
            margin-bottom: 0.4rem;
        }

        .progress-bar-bg {
            width: 100%;
            height: 12px;
            background: #d9e8d9;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: inset 0 2px 4px rgba(0, 20, 0, 0.05);
            border: 1px solid rgba(60, 130, 60, 0.1);
        }

        .progress-fill {
            height: 100%;
            width: 68%;
            background: linear-gradient(90deg, #2d7a2d, #4fa84f, #75c775);
            border-radius: 30px;
            box-shadow: 0 0 12px #4fa84f66;
            animation: shimmer 2.4s infinite linear;
            background-size: 200% 100%;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .info-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.2rem 2rem;
            background: rgba(235, 248, 235, 0.5);
            border-radius: 80px;
            padding: 0.8rem 1.8rem;
            margin: 1.8rem 0 2.2rem;
            backdrop-filter: blur(4px);
            border: 1px solid rgba(60, 130, 60, 0.1);
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-size: 0.95rem;
            font-weight: 500;
            color: #1e471e;
        }

        .info-item i {
            color: #2b6e2b;
            font-size: 1.2rem;
        }

        .btn-redirect {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.7rem;
            background: #1f4f2b;
            color: white;
            font-weight: 600;
            font-size: 1.2rem;
            padding: 1rem 2.8rem;
            border-radius: 80px;
            text-decoration: none;
            transition: all 0.25s ease;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 12px 24px -10px rgba(20, 70, 20, 0.4);
            letter-spacing: 0.3px;
            margin-top: 0.2rem;
        }

        .btn-redirect i {
            transition: transform 0.3s ease;
        }

        .btn-redirect:hover {
            background: #2a6636;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 20px 32px -12px rgba(20, 70, 20, 0.5);
            border-color: rgba(255, 255, 255, 0.25);
        }

        .btn-redirect:hover i {
            transform: translateX(6px);
        }

        .btn-redirect:active {
            transform: scale(0.97);
        }

        .footer-note {
            margin-top: 2.4rem;
            font-size: 0.85rem;
            color: #3f6a3f;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
            flex-wrap: wrap;
            border-top: 1px dashed rgba(60, 130, 60, 0.2);
            padding-top: 1.8rem;
        }

        .footer-note i {
            color: #4b8c4b;
        }

        .footer-note span {
            background: rgba(60, 130, 60, 0.05);
            padding: 0.2rem 1rem;
            border-radius: 30px;
            font-weight: 500;
        }

        /* responsif */
        @media (max-width: 550px) {
            .maintenance-card {
                padding: 2rem 1.2rem;
                border-radius: 2.5rem;
            }

            h1 {
                font-size: 2rem;
            }

            .icon-wrapper i {
                font-size: 3rem;
            }

            .btn-redirect {
                font-size: 1rem;
                padding: 0.8rem 2rem;
                width: 100%;
            }

            .info-grid {
                flex-direction: column;
                align-items: center;
                gap: 0.7rem;
                border-radius: 40px;
                padding: 1rem 1rem;
            }

            .status-message {
                font-size: 0.95rem;
                padding: 0.6rem 1.2rem;
            }
        }

        /* aksesibilitas & hover */
        .btn-redirect:focus-visible {
            outline: 3px solid #b3e0b3;
            outline-offset: 3px;
        }
    </style>
</head>

<body>
    <div class="maintenance-card">
        <!-- ikon utama -->
        <div class="icon-wrapper">
            <i class="fas fa-seedling"></i>
        </div>

        <h1>Institut Hijau Indonesia</h1>
        <div class="subhead">
            <i class="fas fa-rotate fa-spin" style="margin-right: 0.5rem;"></i> Pemeliharaan & Migrasi Data
        </div>

        <div class="status-message">
            <i class="fas fa-cloud-upload-alt"></i> Kami sedang memindahkan data ke infrastruktur baru
        </div>

        <!-- progress bar -->
        <div class="progress-area">
            <div class="progress-label">
                <span><i class="fas fa-database" style="margin-right: 6px;"></i>Migrasi data</span>
                <span>68%</span>
            </div>
            <div class="progress-bar-bg">
                <div class="progress-fill"></div>
            </div>
        </div>

        <!-- info ringkas -->
        <div class="info-grid">
            <div class="info-item">
                <i class="fas fa-server"></i> Server baru
            </div>
            <div class="info-item">
                <i class="fas fa-shield-alt"></i> Keamanan ditingkatkan
            </div>
            <div class="info-item">
                <i class="fas fa-clock"></i> Perkiraan selesai: 2 jam
            </div>
        </div>

        <!-- TOMBOL ARAH KE PROGRAM -->
        <a href="https://program.instituhijauindonesia.or.id" class="btn-redirect" target="_blank" rel="noopener noreferrer">
            <i class="fas fa-arrow-right"></i> Kunjungi Program
            <i class="fas fa-external-link-alt" style="font-size: 0.9rem; opacity: 0.7;"></i>
        </a>

        <div class="footer-note">
            <i class="fas fa-leaf"></i>
            <span>IHI</span>
            <i class="fas fa-circle" style="font-size: 0.3rem; opacity: 0.5;"></i>
            <span>Kembali lebih hijau</span>
            <i class="fas fa-tree"></i>
        </div>
    </div>
</body>

</html>