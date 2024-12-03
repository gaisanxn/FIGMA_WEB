<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktivitas</title>
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





        /* Wrapper Responsif */
        .wrapper,
        .wrapper2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #e6e4b3;
            border-radius: 8px;
            max-width: 1000px;
            margin: 50px auto;
            padding: 15px;
            flex-wrap: wrap;
        }

        /* Bagian Gambar Responsif */
        .image-section,
        .image-section2 {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 100%;
            padding-bottom: 75%;
            /* Default untuk layar besar */
            max-width: 500px;
        }

        .image,
        .image2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.8);
        }

        /* Bagian Teks Responsif */
        .text-section,
        .text-section2 {
            flex: 1;
            padding: 20px;
        }

        /* Kotak Konten */
        .content-box,
        .content-box2,
        .content-box3 {
            background-color: #f6f4d0;
            padding: 20px;
            position: relative;
            font-family: 'League Spartan', sans-serif;
        }

        /* Judul dan Deskripsi */
        .title,
        .title2 {
            font-size: 22px;
            color: #3e5942;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .description,
        .description2 {
            font-size: 16px;
            color: #444;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Tautan Baca Selengkapnya */
        .read-more,
        .read-more2 {
            color: #0F4872;
            font-size: 12px;
            font-weight: 600;
            text-decoration: none;
            border-left: 3px solid #0F4872;
            padding-left: 5px;
            background-color: rgba(110, 172, 218, 0.20);
            position: relative;
            top: -20px;
            opacity: 75%;
        }

        .read-more:hover,
        .read-more2:hover {
            color: #008CBA;
            border-bottom-color: #008CBA;
        }

        /* Media Queries untuk Layar Lebar hingga 1440px */
        @media (min-width: 1025px) and (max-width: 1440px) {

            .wrapper,
            .wrapper2 {
                max-width: 1200px;
                padding: 20px;
            }

            .image-section,
            .image-section2 {
                padding-bottom: 56.25%;
                /* Rasio 16:9 untuk tampilan lebih datar */
                max-width: 450px;
                /* Sesuaikan batas lebar pada layar besar */
            }

            .title,
            .title2 {
                font-size: 24px;
            }

            .description,
            .description2 {
                font-size: 18px;
            }

            .read-more,
            .read-more2 {
                font-size: 14px;
                top: -15px;
            }
        }


        /* Media Queries untuk Responsivitas */

        @media (max-width: 2560px) {

            .title,
            .title2 {
                font-size: 28px;
                /* Menambah ukuran font judul agar terlihat proporsional */
            }

            .description,
            .description2 {
                font-size: 20px;
                /* Menambah ukuran font deskripsi */
            }

            .image-section,
            .image-section2 {
                padding-bottom: 20%;
                /* Menyesuaikan rasio tinggi gambar */
                max-width: 800px;
                /* Menambah lebar gambar untuk layar yang lebih besar */
            }

            .content-box,
            .content-box2,
            .content-box3 {
                max-width: 900px;
                /* Menambah lebar konten agar sesuai layar besar */
                max-height: 800px;
                /* Menambah tinggi maksimal */
                padding: 25px;
                /* Menambah padding agar tetap rapi */
                overflow-y: auto;
                /* Menambahkan scroll jika konten terlalu panjang */
            }
        }


        @media (max-width: 1440px) {

            .title,
            .title2 {
                font-size: 24px;
                /* Membuat font judul sedikit lebih besar */
            }

            .description,
            .description2 {
                font-size: 18px;
                /* Menambah ukuran font deskripsi */
            }

            .image-section,
            .image-section2 {
                padding-bottom: 25%;
                /* Mengurangi rasio tinggi gambar sedikit */
                max-width: 600px;
                /* Menambah lebar gambar untuk layar yang lebih besar */
            }

            .content-box,
            .content-box2,
            .content-box3 {
                max-width: 700px;
                /* Menambah lebar konten */
                max-height: 600px;
                /* Menambah tinggi maksimal */
                padding: 20px;
                /* Menambah padding untuk menjaga tampilan tetap rapi */
                overflow-y: auto;
                /* Menambahkan scroll jika konten terlalu panjang */
            }
        }


        @media (max-width: 1024px) {
            .wrapper2 {
                display: flex;
                /* Menggunakan Flexbox */
                flex-direction: row;
                /* Mengatur susunan elemen secara horizontal */
                align-items: center;
                /* Pusatkan elemen secara vertikal */
                justify-content: space-between;
                /* Beri jarak antara gambar dan konten */
            }

            .title,
            .title2 {
                font-size: 20px;
            }

            .description,
            .description2 {
                font-size: 15px;
            }

            .image-section,
            .image-section2 {
                padding-bottom: 30%;
                /* Mengurangi rasio tinggi gambar */
                max-width: 400px;
                /* Mempersempit lebar gambar */
                margin-left: 20px;
                /* Memberi jarak antara gambar dan konten */
            }

            .content-box,
            .content-box2,
            .content-box3 {
                max-width: 500px;
                /* Mengurangi lebar konten */
                max-height: 400px;
                /* Membatasi tinggi maksimal */
                padding: 15px;
                /* Menambahkan sedikit padding untuk menjaga tampilan tetap rapi */
                overflow-y: auto;
                /* Menambahkan scroll jika konten terlalu panjang */
            }
        }



        @media (max-width: 768px) {

            .wrapper,
            .wrapper2 {
                flex-direction: column;
            }

            .image-section,
            .image-section2 {
                padding-bottom: 40%;
                max-width: 400px;

            }

            .content-box,
            .content-box2,
            .content-box3 {
                padding: 15px;
                max-width: 450px;
                /* Lebar yang lebih kecil untuk tablet */
                height: auto;
            }

            .title,
            .title2 {
                font-size: 18px;
            }

            .description,
            .description2 {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {

            .image-section,
            .image-section2 {
                padding-bottom: 60%;
                max-width: 250px;
            }

            .content-box,
            .content-box2,
            .content-box3 {
                padding: 10px;
            }

            .title,
            .title2 {
                font-size: 16px;
            }

            .description,
            .description2 {
                font-size: 13px;
                margin-bottom: 10px;
            }

            .read-more,
            .read-more2 {
                font-size: 10px;
                top: -10px;
            }
        }

        @media (max-width: 320px) {

            .image-section,
            .image-section2 {
                padding-bottom: 70%;
                /* Rasio lebih kecil untuk ukuran layar 320px */
                max-width: 200px;
            }

            .content-box,
            .content-box2,
            .content-box3 {
                padding: 8px;
                max-width: 300px;
                /* Lebar lebih kecil untuk layar yang lebih sempit */
            }

            .title,
            .title2 {
                font-size: 14px;
            }

            .description,
            .description2 {
                font-size: 12px;
                margin-bottom: 8px;
            }

            .read-more,
            .read-more2 {
                font-size: 9px;
                top: -8px;
            }
        }



        /* Footer responsif */
        .footer {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            background-color: #021526;
            color: white;
            font-size: 8px;
        }

        .footer-logo {
            max-width: 60px;
            margin-right: 5px;
        }

        .footer p {
            margin: 0;
            font-size: 8px;
            font-family: 'League Spartan', sans-serif;
            color: #E2E2B6;
        }

        .footer-separator {
            margin: 0 5px;
            color: #E2E2B6;
        }




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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="/upload/<?= $aktivitas->img_navbar ?>" alt="Logo" width="161" height="97" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">BERANDA</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tentang">TENTANG</a></li> <!-- Link ke halaman Tentang -->
                    <li class="nav-item"><a class="nav-link" href="/produk">PRODUK</a></li>
                    <li class="nav-item"><a class="nav-link" href="/artikel">ARTIKEL</a></li>
                    <li class="nav-item"><a class="nav-link" href="/aktivitas">AKTIVITAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">KONTAK</a></li> <!-- Link ke halaman Kontak -->

                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel, Page Title, and Breadcrumb Wrapper -->
    <div id="carouselExample" class="carousel slide position-relative">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/upload/<?= $aktivitas->img_slider ?>" alt="Slide 1" class="d-block w-100" style="height:auto;">
                <div class="carousel-overlay"></div>
            </div>
        </div>

        <!-- Page Title and Breadcrumb -->
        <div class="carousel-caption-wrapper d-flex align-items-center justify-content-center">
            <div class="text-center">
                <div class="page-title">Aktivitas Kami</div>
                <div class="breadcrumb">
                    <a href="/">Beranda</a> <span> / Aktivitas</span>
                </div>
            </div>
        </div>
    </div>

    <?php foreach ($dataaktivitas as $aktivitasItem): ?>
        <!-- konten 1 -->
        <div class="wrapper">
            <div class="image-section">
                <img src="upload/<?= esc($aktivitasItem->img) ?>" alt="Peluncuran Produk Baru" class="image">
            </div>
            <div class="text-section">
                <div class="content-box">
                    <h2 class="title"><?= esc($aktivitasItem->judul_img) ?></h2>
                    <p class="description">
                        <?= esc(substr($aktivitasItem->deskripsi_img, 0, 300)) ?>...
                    </p>

                    <a href="<?= site_url('aktivitas/' . $aktivitasItem->slug) ?>" class="read-more">Baca Selengkapnya</a>                </div>
            </div>
        </div>
    <?php endforeach; ?>



    <div class="footer">
        <img src="upload/<?= $aktivitas->img_footer ?>" alt="Logo" class="footer-logo">
        <span class="footer-separator">|</span>
        <p>Copyright ©2024. Design by Bayu Valent</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>