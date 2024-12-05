<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail.produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #E2E2B6;
            /* Background warna luar */
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

        

        .article-content {
    width: 90%; /* Lebar default untuk semua perangkat */
    max-width: 648.78px; /* Lebar maksimum */
    background-color: #E2E2B6;
    border: 1px solid #021526;
    padding: 0;
    margin: 40px auto;
    position: relative;
}

.article-image {
    width: 70%; /* Lebar default gambar */
    height: auto; /* Tinggi otomatis mengikuti proporsi */
    object-fit: cover; /* Agar gambar tetap proporsional tanpa distorsi */
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.article-title {
    font-family: 'League Spartan', sans-serif;
    font-size: 29px;
    color: #021526;
    font-weight: 600;
    margin: 8px;
    padding: 0 10px; /* Memberi jarak di kiri dan kanan */
    text-align: left; /* Rata kiri */
}

.article-text {
    font-family: 'League Spartan', sans-serif;
    font-size: 20px;
    color: rgba(2, 21, 38, 0.70);
    line-height: 1.8; /* Jarak antar baris */
    letter-spacing: 0.5px; /* Spasi antar huruf */
    word-spacing: 1px; /* Spasi antar kata */
    margin: 8px;
    padding: 0 10px; /* Memberi jarak di kiri dan kanan */
    margin-bottom: 20px;
}

/* Media Queries */

/* Tablet besar (max-width: 1024px) */
@media (max-width: 1024px) {
    .article-content {
        width: 85%;
    }

    .article-title {
        font-size: 24px;
    }

    .article-text {
        font-size: 18px;
        line-height: 1.6;
    }

    .article-image {
        width: 80%; /* Perbesar gambar untuk tablet besar */
    }
}

/* Tablet kecil (max-width: 768px) */
@media (max-width: 768px) {
    .article-content {
        width: 75%;
    }

    .article-title {
        font-size: 20px;
    }

    .article-text {
        font-size: 14px;
        line-height: 1.5;
    }

    .article-image {
        width: 65%; /* Gambar lebih lebar untuk tablet kecil */
    }
}

/* Ponsel besar (max-width: 425px) */
@media (max-width: 425px) {
    .article-content {
        width: 85%;
    }

    .article-title {
        font-size: 20px;
    }

    .article-text {
        font-size: 14px;
        line-height: 1.4;
    }

    .article-image {
        width: 90%; /* Gambar hampir memenuhi layar */
    }
}

/* Ponsel kecil (max-width: 375px) */
@media (max-width: 375px) {
    .article-content {
        width: 80%;
    }

    .article-title {
        font-size: 18px;
    }

    .article-text {
        font-size: 12px;
        line-height: 1.5;
    }

    .article-image {
        width: 95%; /* Gambar lebih lebar untuk ponsel kecil */
    }
}

/* Layar sangat kecil (max-width: 320px) */
@media (max-width: 320px) {
    .article-content {
        width: 80%;
    }

    .article-title {
        font-size: 16px;
    }

    .article-text {
        font-size: 11px;
        line-height: 1.5;
    }

    .article-image {
        width: 90%; /* Gambar memenuhi lebar kontainer */
    }
}


        /* Footer responsif */
        .footer {
            display: flex;
            align-items: center;
            /* Untuk memastikan elemen sejajar vertikal */
            justify-content: center;
            /* Untuk membuat konten berada di tengah */
            padding: 5px;
            /* Kurangi padding untuk membuat footer lebih tipis */
            background-color: #021526;
            color: white;
            font-size: 8px;
            /* Ukuran font yang lebih kecil */
        }

        .footer-logo {
            max-width: 60px;
            /* Kecilkan ukuran logo */
            margin-right: 5px;
            /* Kurangi jarak antara logo dan teks */
        }

        .footer p {
            margin: 0;
            font-size: 8px;
            /* Ukuran font yang lebih kecil untuk teks copyright */
            font-family: 'League Spartan', sans-serif;
            /* Gaya font League Spartan Regular */
            color: #E2E2B6;
            /* Ubah warna tulisan Copyright */
        }

        .footer-separator {
            margin: 0 5px;
            /* Jarak antara logo dan teks copyright */
            color: #E2E2B6;
            /* Warna separator yang sama dengan warna teks */
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
                <img src="/upload/<?= $produk->img_navbar ?>" alt="Logo" width="161" height="97" class="d-inline-block align-text-top">
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
                <img src="/upload/<?= $produk->img_slider ?>" alt="Slide 1" class="d-block w-100" style="height:auto;">
                <div class="carousel-overlay"></div>
            </div>
        </div>

        <!-- Page Title and Breadcrumb -->
        <div class="carousel-caption-wrapper d-flex align-items-center justify-content-center">
            <div class="text-center">
                <div class="page-title"><?=lang('Blog.produkkamislider');?></div>
                <div class="breadcrumb">
                    <a href="/"><?=lang('Blog.linkberanda');?></a> <span><?=lang('Blog./produk');?></span>
                </div>
            </div>
        </div>
    </div>





    <!-- Article Content -->
    <div class="article-content">
        <img src="/upload/<?= $produk->img_produk?>" alt="TechSmart Image" class="article-image">

        <h2 class="article-title">
    <?php if ($lang === 'id'): ?>
        <?= $produk->nama_produk ?>
    <?php else: ?>
        <?= $produk->nama_produk_en ?>
    <?php endif; ?>
</h2>

<p class="article-text">
    <?= $lang === 'id' ? $produk->deskripsi_produk : $produk->deskripsi_produk_en ?>
</p>
    </div>

    <!-- Footer -->
<div class="footer">
<img src="<?= base_url('upload/' . $produk->img_footer); ?>" alt="Logo" class="footer-logo">
    <span class="footer-separator">|</span>
    <p>Copyright ©2024. Design by Bayu Valent</p>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>