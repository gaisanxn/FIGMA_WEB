<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Tera&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@500&display=swap" rel="stylesheet">



    <style>
        body {
            background-color: #E2E2B6; /* Background warna luar */
        }

       /* Navbar Customization */
       .navbar-custom {
            background-color: #021526;
            padding: 0;
            /* Menghilangkan padding untuk mengurangi tinggi background */
            border-bottom: 1px solid transparent;
            /* Tambahkan batas bawah jika diperlukan */
        }

        /* Navbar Brand (Logo) */
        .navbar-brand img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
            width: 110px;
            /* Ukuran default gambar lebih kecil */
            margin-left: 30px;
            /* Geser logo ke kanan dengan menambah margin kiri */

        }

        /* Navbar Links */
        .navbar-nav .nav-item {
            margin: 10px;
            /* Menghilangkan margin antar item navbar */
        }

        .navbar-nav .nav-link {
            font-family: 'Lato', sans-serif;
            font-size: 12px;
            /* Ukuran font dapat disesuaikan lebih kecil */
            font-weight: 700;
            color: #E2E2B6 !important;
            padding: 5px 8px;
            /* Mengurangi padding lebih lanjut untuk mengurangi tinggi */
            transition: color 0.3s ease, transform 0.3s ease;

        }

        .navbar-nav .nav-link:hover {
            color: #FFD700 !important;
            /* Warna kuning saat hover */
            transform: scale(1.1) !important;
            /* Efek perbesaran */
        }

/* Ganti warna ikon navbar-toggler menjadi putih */
.navbar-toggler-icon {
    background-color: #ffff0000; /* Warna putih untuk ikon toggler */
}

/* Menambahkan efek transisi pada toggler untuk perubahan smooth */
.navbar-toggler {
    border: none; /* Menghilangkan border untuk membuat tampilan lebih bersih */
}

        /* Responsivitas dengan Media Queries */
        @media (max-width: 992px) {

            /* Untuk layar medium (tablet) */
            .navbar-brand img {
                width: 100px;
                /* Perkecil ukuran gambar pada layar tablet */
            }

            .navbar-nav .nav-link {
                font-size: 9px;
                /* Perkecil ukuran font */
            }
        }

        @media (max-width: 768px) {

            /* Untuk layar kecil (smartphone) */
            .navbar-brand img {
                width: 80px;
                /* Ukuran gambar lebih kecil */
            }

            .navbar-nav .nav-link {
                font-size: 8px;
                /* Sesuaikan ukuran font */
                padding: 4px;
                /* Sesuaikan padding lebih kecil */
            }
        }

        @media (max-width: 576px) {

            /* Untuk layar extra kecil (smartphone kecil) */
            .navbar-brand img {
                width: 70px;
                /* Ukuran gambar lebih kecil untuk smartphone */
            }

            .navbar-nav .nav-link {
                font-size: 7px;
                /* Lebih kecil untuk layar kecil */
                padding: 2px;
                /* Sesuaikan padding lebih kecil */
            }
        }

        /* Navbar Toggle Customization */
        .navbar-toggler {
            z-index: 1050;
            /* Tetap di depan elemen lain */
            position: relative;
            transition: all 0.3s ease;
            /* Transisi smooth */
        }

        .navbar-collapse {
            background-color: transparent;
            /* Tidak ada background pada collapse */
            position: relative;
            z-index: 1049;
            transition: all 0.3s ease-in-out;
        }

        /* Menu background saat toggle aktif */
        .navbar-collapse.show {
            background-color: #021526;
            /* Background hanya pada menu */
            width: 30%;
            /* Kurangi lebar saat efek, lebih kecil dari sebelumnya */
            border-radius: 0 0px 15px 0;
            /* Tambahkan sedikit efek rounded di ujung */
        }

        /* Navbar item pada layar kecil */
        .navbar-nav .nav-item {
            width: 100%;
            /* Menu menyesuaikan ukuran */
            transition: background-color 0.3s ease;
        }



        /* Responsivitas */
        @media (max-width: 992px) {

            /* Tablet */
            .navbar-collapse {
                width: 45%;
                /* Lebar lebih kecil pada layar medium */
                position: absolute;
                top: 56px;
                /* Posisi navbar collapse di bawah navbar */
                left: 0;
                padding: 1rem;
                border-radius: 0 10px 10px 0;
                /* Efek rounded pada ujung kanan */
            }
        }

        @media (max-width: 768px) {

            /* Smartphone */
            .navbar-collapse {
                width: 40%;
                /* Kurangi lagi lebar pada layar kecil */
            }
        }

        @media (max-width: 576px) {

            /* Smartphone kecil */
            .navbar-collapse {
                width: 35%;
                /* Lebar lebih kecil lagi pada layar ekstra kecil */
            }
        }


/* Reset basic styles */
.carousel-inner img {
            width: 100%;
            /* Mengatur gambar agar lebar sesuai dengan container */
            height: auto;
            /* Mengatur tinggi gambar secara otomatis */
            object-fit: cover;
            /* Memastikan gambar menyesuaikan tanpa terdistorsi */
            max-height: 30vh;
            /* Membatasi tinggi gambar agar lebih pendek */
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Overlay transparan */
            z-index: 1;
        }

        /* Wrapper untuk page title dan breadcrumb */
        .carousel-caption-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            /* Gunakan flexbox */
            align-items: center;
            /* Vertikal center */
            justify-content: center;
            /* Horizontal center */
            z-index: 2;
        }

        .text-center {
            text-align: center;
            color: #E2E2B6;
        }

        /* Page Title */
        .page-title {
            font-size: 36px;
            /* Ukuran lebih kecil */
            font-family: 'League Spartan', sans-serif;
            font-weight: 600;
            margin-bottom: 10px;
        }

        /* Breadcrumb */
        .breadcrumb {
            font-size: 14px;
            /* Ukuran lebih kecil */
            font-family: 'League Spartan', sans-serif;
            font-weight: 400;
            margin-top: 10px;
            /* Memberi jarak ke bawah */
            text-align: center;
            /* Membuat breadcrumb berada di tengah */
            display: block;
            /* Pastikan block untuk text-align bekerja */

        }

        .breadcrumb a {
            color: #FFD000;
            text-decoration: none;
        }

        .breadcrumb span {
            color: #E2E2B6;
        }

        /* Media Queries untuk responsivitas */
        /* Desktop (besar) */
        @media (min-width: 1440px) {
            .page-title {
                font-size: 36px;
                /* Lebih kecil dari sebelumnya */
            }

            .breadcrumb {
                font-size: 14px;
                /* Lebih kecil dari sebelumnya */
            }

            .carousel-inner img {
                max-height: 35vh;
                /* Membatasi tinggi gambar di layar besar */
            }
        }

        /* Laptop */
        @media (min-width: 1024px) and (max-width: 1439px) {
            .page-title {
                font-size: 32px;
                /* Ukuran lebih kecil untuk laptop */
                margin-top: 15px;
                /* Jarak lebih besar untuk desktop */

            }

            .breadcrumb {
                font-size: 12px;
                /* Ukuran lebih kecil */
            }

            .carousel-inner img {
                max-height: 30vh;
                /* Membatasi tinggi gambar di laptop */
            }
        }

        /* Tablet */
        @media (min-width: 769px) and (max-width: 1023px) {
            .page-title {
                font-size: 28px;
                /* Ukuran lebih kecil untuk tablet */
            }

            .breadcrumb {
                font-size: 12px;
                /* Lebih kecil */
                margin-top: 8px;
                /* Jarak medium untuk tablet */

            }

            .carousel-inner img {
                max-height: 25vh;
                /* Membatasi tinggi gambar di tablet */
            }
        }

        /* Mobile */
        @media (max-width: 768px) {
            .page-title {
                font-size: 24px;
                /* Ukuran lebih kecil untuk mobile */
                margin-top: 5px;
                /* Jarak lebih kecil untuk perangkat mobile */

            }

            .breadcrumb {
                font-size: 10px;
                /* Lebih kecil */
            }

            .carousel-inner img {
                max-height: 20vh;
                /* Membatasi tinggi gambar di mobile */
            }

            .carousel-caption-wrapper {
                top: 0;
            }
        }

        /* Small Mobile */
        @media (max-width: 480px) {
            .page-title {
                font-size: 20px;
                /* Ukuran lebih kecil untuk layar kecil */
            }

            .breadcrumb {
                font-size: 8px;
                /* Lebih kecil */
            }

            .carousel-inner img {
                max-height: 18vh;
                /* Membatasi tinggi gambar di layar kecil */
            }
        }




/* Contact Section */
.contact-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    gap: 20px;
    max-width: 800px;
    margin: 20px auto;
    border-radius: 15px;
    background: linear-gradient(135deg, #021526, #021526); /* Gradien biru */
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
    color: #ffffff;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
}

.contact-section:hover {
    transform: translateY(-5px);
}

/* Contact Iframe */
.contact-section iframe {
    width: 100%;
    height: auto;
    border: 0;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    margin-bottom: 15px;
    aspect-ratio: 4 / 3; /* Menjaga rasio 4:3 */
}

/* Contact Info */
.contact-info {
    text-align: center;
    padding: 10px;
}

.contact-info h2 {
    font-size: 24px;
    font-family: 'Poppins', sans-serif;
    margin-bottom: 10px;
    color: #f9f9f9;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
    font-weight: bold;
}

.contact-info p {
    font-size: 15px;
    line-height: 1.6;
    margin-bottom: 20px;
    color: #dcdcdc;
}

/* Contact Details */
.contact-info-details {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
    padding: 10px 20px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    width: 100%;
}

.contact-info-details h3 {
    font-size: 18px;
    color: #FFD700; /* Emas */
    font-weight: bold;
    margin-bottom: 5px;
}

.contact-info-details h6 {
    display: flex;
    align-items: center;
    font-size: 14px;
    color: #ffffff;
    gap: 10px;
}

.contact-info-details h6 i {
    color: #FFD700;
    font-size: 18px;
}

.contact-info-details span {
    color: #FFD700;
    font-weight: bold;
    font-size: 14px;
}

/* Responsive Styles */

/* 2560px */
@media (min-width: 2560px) {
    .contact-section {
        max-width: 1200px;
        padding: 30px;
        gap: 30px;
    }

    .contact-info h2 {
        font-size: 28px;
    }

    .contact-info p {
        font-size: 18px;
    }

    .contact-info-details h3 {
        font-size: 20px;
    }

    .contact-info-details h6 {
        font-size: 16px;
    }
}

/* 1440px */
@media (max-width: 1440px) {
    .contact-section {
        padding: 25px;
        gap: 20px;
    }

    .contact-info h2 {
        font-size: 26px;
    }

    .contact-info p {
        font-size: 16px;
    }
}

/* 1024px */
@media (max-width: 1024px) {
    .contact-section {
        padding: 20px;
        gap: 18px;
    }

    .contact-info h2 {
        font-size: 24px;
    }

    .contact-info p {
        font-size: 15px;
    }
}

/* 768px */
@media (max-width: 768px) {
    .contact-section {
        max-width: 600px;
        padding: 10px;
        gap: 10px;
    }

    .contact-info h2 {
        font-size: 18px;
    }

    .contact-info p {
        font-size: 12px;
    }

    .contact-info-details h3 {
        font-size: 14px;
    }

    .contact-info-details h6 {
        font-size: 12px;
    }

    .contact-section iframe {
        height: auto;
    }
}

/* 576px */
@media (max-width: 576px) {
    .contact-section {
        max-width: 500px;
        padding: 8px;
        gap: 8px;
    }

    .contact-info h2 {
        font-size: 16px;
    }

    .contact-info p {
        font-size: 13px;
    }

    .contact-info-details {
        padding: 10px 18px;
    }

    .contact-info-details h3 {
        font-size: 12px;
    }

    .contact-info-details h6 {
        font-size: 11px;
    }

    .contact-section iframe {
        height: auto;
    }
}

/* 480px */
@media (max-width: 480px) {
    .contact-section {
        max-width: 450px; /* Atur lebar container lebih kecil untuk 480px */
        padding: 6px;
        gap: 6px;
    }

    .contact-info h2 {
        font-size: 14px;
    }

    .contact-info p {
        font-size: 11px;
    }

    .contact-info-details {
        padding: 8px 16px;
    }

    .contact-info-details h3 {
        font-size: 11px;
    }

    .contact-info-details h6 {
        font-size: 9px;
    }

    .contact-section iframe {
        height: auto; /* Tetap menjaga rasio 4:3 */
    }
}


/* 425px */
@media (max-width: 425px) {
    .contact-section {
        max-width: 350px;
        padding: 6px;
        gap: 6px;
    }

    .contact-info h2 {
        font-size: 14px;
    }

    .contact-info p {
        font-size: 10px;
    }

    .contact-info-details {
        padding: 8px 15px;
    }

    .contact-info-details h3 {
        font-size: 10px;
    }

    .contact-info-details h6 {
        font-size: 8px;
    }

    .contact-section iframe {
        height: auto;
    }
}

/* 375px */
@media (max-width: 375px) {
    .contact-section {
        max-width: 320px;
        padding: 4px;
        gap: 4px;
    }

    .contact-info h2 {
        font-size: 12px;
    }

    .contact-info p {
        font-size: 9px;
    }

    .contact-info-details {
        padding: 6px 12px;
    }

    .contact-info-details h3 {
        font-size: 9px;
    }

    .contact-info-details h6 {
        font-size: 7px;
    }

    .contact-section iframe {
        height: auto;
    }
}

/* 320px */
@media (max-width: 320px) {
    .contact-section {
        max-width: 280px;
        padding: 3px;
        gap: 3px;
    }

    .contact-info h2 {
        font-size: 10px;
    }

    .contact-info p {
        font-size: 8px;
    }

    .contact-info-details {
        padding: 4px 10px;
    }

    .contact-info-details h3 {
        font-size: 7px;
    }

    .contact-info-details h6 {
        font-size: 6px;
    }

    .contact-section iframe {
        height: auto;
    }
}




/* Footer default styling */
.footer {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    background-color: #021526;
    color: white;
    font-size: 12px;
    font-family: 'League Spartan', sans-serif;
    color: #E2E2B6;
}

.footer-logo {
    max-width: 80px;
    margin-right: 10px;
}

.footer p {
    margin: 0;
}

.footer-separator {
    margin: 0 10px;
    color: #E2E2B6;
}

/* Media Queries for Responsive Design */

/* 2560px and above */
@media (min-width: 2560px) {
    .footer {
        font-size: 14px;
        padding: 15px;
    }
    .footer-logo {
        max-width: 100px;
    }
}

/* 1440px to 2560px */
@media (max-width: 2560px) and (min-width: 1440px) {
    .footer {
        font-size: 12px;
        padding: 10px;
    }
    .footer-logo {
        max-width: 80px;
    }
}

/* 1024px to 1440px */
@media (max-width: 1440px) and (min-width: 1024px) {
    .footer {
        font-size: 10px;
        padding: 8px;
    }
    .footer-logo {
        max-width: 70px;
    }
}

/* 768px to 1024px */
@media (max-width: 1024px) and (min-width: 768px) {
    .footer {
        font-size: 9px;
        padding: 6px;
    }
    .footer-logo {
        max-width: 60px;
    }
}

/* 576px to 768px */
@media (max-width: 768px) and (min-width: 576px) {
    .footer {
        font-size: 8px;
        padding: 5px;
    }
    .footer-logo {
        max-width: 50px;
    }
}

/* 425px to 576px */
@media (max-width: 576px) and (min-width: 425px) {
    .footer {
        font-size: 7px;
        padding: 4px;
    }
    .footer-logo {
        max-width: 40px;
    }
}

/* 375px to 425px */
@media (max-width: 425px) and (min-width: 375px) {
    .footer {
        font-size: 6px;
        padding: 3px;
    }
    .footer-logo {
        max-width: 35px;
    }
}

/* 320px to 375px */
@media (max-width: 375px) and (min-width: 320px) {
    .footer {
        font-size: 5px;
        padding: 2px;
    }
    .footer-logo {
        max-width: 30px;
    }
}


        .flag-icon {
            width: 20px;
            /* Sesuaikan ukuran lebar sesuai kebutuhan */
            height: auto;
            /* Pastikan proporsi gambar tetap */
            display: inline-block;
            margin-right: 5px;
            /* Memberikan sedikit jarak jika ada teks di sampingnya */
            vertical-align: middle;
            /* Menyelaraskan dengan teks */
        }
        </style>
</head>
<body>


<?php
    // Ambil bahasa yang disimpan di session
    $lang = session()->get('lang') ?? 'id'; // Default ke 'en' jika tidak ada di session

    $current_url = uri_string();

    // Ambil query string (misalnya ?keyword=sukses)
    $query_string = $_SERVER['QUERY_STRING']; // Mengambil query string dari URL

    // Simpan segmen bahasa saat ini
    $lang_segment = substr($current_url, 0, strpos($current_url, '/') + 1); // Menyimpan 'id/' atau 'en/'

    // Definisikan tautan untuk setiap halaman berdasarkan bahasa
    $homeLink = ($lang_segment === 'en/') ? '/' : '/';
    $belajarEksporLink = ($lang_segment === 'en/') ? 'export-learning' : 'belajar-ekspor';
    $pendaftaranLink = ($lang_segment === 'en/') ? 'registration' : 'pendaftaran';
    $videoTutorialLink = ($lang_segment === 'en/') ? 'video-tutorial' : 'tutorial-video';
    $memberLink = ($lang_segment === 'en/') ? 'data-member' : 'data-member';
    $buyersLink = ($lang_segment === 'en/') ? 'data-buyers' : 'data-buyers';

    // Buat array untuk menggantikan segmen berdasarkan bahasa
    $replace_map = [
        'tentang' => 'about',
        'produk' => 'product',
        'artikel' => 'article',
        'aktivitas' => 'activities',
        'kontak' => 'contact',

    ];

    // Ambil bagian dari URL tanpa segmen bahasa
    $url_without_lang = substr($current_url, strlen($lang_segment));

    // Tentukan bahasa yang ingin digunakan
    $new_lang_segment = ($lang_segment === 'en/') ? 'id/' : 'en/';

    // Gantikan setiap segmen dalam URL berdasarkan bahasa yang aktif
    foreach ($replace_map as $indonesian_segment => $english_segment) {
        if ($lang_segment === 'en/') {
            // Jika bahasa yang dipilih adalah 'en', maka ganti segmen ID ke EN
            $url_without_lang = str_replace($english_segment, $indonesian_segment, $url_without_lang);
        } else {
            // Jika bahasa yang dipilih adalah 'id', maka ganti segmen EN ke ID
            $url_without_lang = str_replace($indonesian_segment, $english_segment, $url_without_lang);
        }
    }

    // Tautan dengan bahasa yang baru
    $clean_url = $new_lang_segment . ltrim($url_without_lang, '/');

    // Gabungkan query string jika ada
    if (!empty($query_string)) {
        $clean_url .= '?' . $query_string;
    }


    // Tautan Bahasa Inggris
    $english_url = base_url($clean_url);

    // Tautan Bahasa Indonesia
    $indonesia_url = base_url($clean_url);
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="/upload/<?= $kontak->img_navbar ?>" alt="Logo" width="161" height="97" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/"><?= lang('Messages.home') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(($lang == 'en') ? '/en/about' : '/id/tentang') ?>"><?= lang('Messages.about') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(($lang == 'en') ? '/en/product' : '/id/produk') ?>"><?= lang('Messages.product') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(($lang == 'en') ? '/en/article' : '/id/artikel') ?>"><?= lang('Messages.article') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(($lang == 'en') ? '/en/activities' : '/id/aktivitas') ?>"><?= lang('Messages.activities') ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(($lang == 'en') ? '/en/contact' : '/id/kontak') ?>"><?= lang('Messages.contact') ?></a></li>
                </ul>
                <div class="dropdown">
                    <button class="btn text-light language-btn" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/<?= $lang === 'id' ? '9/9f/Flag_of_Indonesia' : 'a/a4/Flag_of_the_United_States'; ?>.svg" alt="<?= $lang === 'id' ? 'Indonesian' : 'English'; ?>" class="flag-icon mb-1">
                        <i class="bi bi-chevron-down ms-1"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li>
                            <a class="dropdown-item <?= $lang == 'id' ? 'disabled' : '' ?>" href="<?= $english_url ?>" <?= $lang == 'id' ? 'style="pointer-events: none; opacity: 0.5;"' : '' ?>>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Indonesian" class="flag-icon" <?= $lang == 'id' ? 'style="filter: grayscale(100%);"' : '' ?>> Indonesian
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item <?= $lang == 'en' ? 'disabled' : '' ?>" href="<?= $indonesia_url ?>" <?= $lang == 'en' ? 'style="pointer-events: none; opacity: 0.5;"' : '' ?>>
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg" alt="English" class="flag-icon" <?= $lang == 'en' ? 'style="filter: grayscale(100%);"' : '' ?>> English
                            </a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </nav>
<!-- Carousel, Page Title, and Breadcrumb Wrapper -->
<div id="carouselExample" class="carousel slide position-relative">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/upload/<?=$kontak->img_slider?>" alt="Slide 1" class="d-block w-100" style="height:auto;">
            <div class="carousel-overlay"></div>
        </div>
        </div>

    <!-- Page Title and Breadcrumb -->
    <div class="carousel-caption-wrapper d-flex align-items-center justify-content-center">
        <div class="text-center">
            <div class="page-title"><?=lang('Blog.kontakkamislider');?></div>
            <div class="breadcrumb">
            <a href="/"><?=lang('Blog.linkberanda');?></a> <span><?=lang('Blog./kontak');?></span>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="contact-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63214.58139900922!2d112.62064327855602!3d-8.008079959780565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd627d22b39369f%3A0xec18b0aca913f173!2sKec.%20Kedungkandang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1727058685696!5m2!1sid!2sid" 
            allowfullscreen="" loading="lazy"></iframe>

    <div class="contact-info">
        <h2><?= $kontak->title_kontak ?></h2>
        <?php if ($lang === 'id'): ?>
    <p><?= $kontak->alamat_kontak ?></p>
<?php else: ?>
    <p><?= $kontak->alamat_kontak_en ?></p>
<?php endif; ?>

        <div class="contact-info-details">
            <h3><?=lang('Blog.hubungikami');?></h3>
            <h6>
                <i class="fas fa-phone-alt"></i>
                <span><?= $kontak->nomor_telp ?></span>
            </h6>
            <h6>
                <i class="fas fa-envelope"></i>
                <span><?= $kontak->email ?></span>
            </h6>
        </div>
    </div>
</div>

    <!-- Footer -->
    <div class="footer">
    <img src="<?= base_url('upload/' . $kontak->img_footer); ?>" alt="Logo" class="footer-logo">
    <span class="footer-separator">|</span>
    <p>Copyright ©2024. Design by Bayu Valent</p>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    </body>
</html>

