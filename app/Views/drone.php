<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail.drone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #E2E2B6; /* Background warna luar */
        }
        .navbar-custom {
            background-color: #021526; /* Warna navbar kustom */
            height: 60px; /* Mengatur tinggi logo */
        }
        .navbar-nav .nav-item {
            margin: 0 10px; /* Jarak horizontal antar item menu */
        }
        .navbar-nav .nav-link {
            font-family: 'Lato', sans-serif; /* Font Lato */
            font-size: 11px; /* Ukuran font */
            font-weight: 700; /* Bold */
            color: #E2E2B6 !important; /* Warna teks */
            padding: 10px; /* Jarak di dalam link */
            transition: color 0.3s ease, transform 0.3s ease; /* Efek transisi */
        }
        .navbar-nav .nav-link:hover {
    color: #FFD700 !important; /* Warna kuning saat hover */
    transform: scale(1.1) !important; /* Efek perbesaran */
}


        .page-title {
            position: absolute;
            left: 50%;
            top: 150px;
            transform: translateX(-50%);
            color: #E2E2B6;
            font-size: 48px;
            font-family: 'League Spartan', sans-serif; /* Menggunakan League Spartan untuk Page Title */
            font-weight: 600; /* Menambahkan font weight untuk efek tebal */
            z-index: 2; /* Pastikan teks berada di atas overlay */
        }

        .breadcrumb {
            position: absolute;
            left: 50%;
            top: 220px;
            transform: translateX(-50%);
            font-size: 16px;
            font-family: 'League Spartan', sans-serif; /* Menggunakan League Spartan untuk Breadcrumb */
            font-weight: 400; /* Mengatur font weight */
            z-index: 2; /* Pastikan teks berada di atas overlay */
        }

        .breadcrumb a {
            color: #FFD000;
            text-decoration: none;
            font-family: 'League Spartan', sans-serif; /* Menggunakan League Spartan untuk link Breadcrumb */
        }

        .breadcrumb span {
            color: #E2E2B6;
        }

        .article-header {
            width: 290px;
            height: 22px;
            background-color: #021526;
            border-radius: 4px;
            border: 1px solid #E2E2B6;
            text-align: center;
            font-family: 'Lexend Exa', sans-serif;
            color: #E2E2B6;
            font-size: 13px;
            margin: 0 auto;
            position: top;
            top: 300px;
            margin-top: 70px;
            white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
        }

        .article-content {
    width: 648.78px;
    background-color: #E2E2B6;
    border: 1px solid #021526;
    padding: 0; /* Hilangkan padding agar gambar memenuhi container */
    margin: 40px auto;
    position: relative;
}


.article-image {
    width: 70%; /* Lebar gambar */
    height: auto; /* Tinggi gambar menyesuaikan */
    object-fit: cover; /* Gambar tetap proporsional */
    display: block; /* Menjadikan gambar sebagai elemen blok */
    margin-left: auto; /* Margin kiri otomatis */
    margin-right: auto; /* Margin kanan otomatis */
}




.article-title {
    font-family: 'League Spartan', sans-serif;
    font-size: 29px;
    color: #021526;
    font-weight: 600;
    margin: 8px;
    padding: 0 10px; /* Memberi jarak di kiri dan kanan */
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

        .footer {
            display: flex;
            align-items: center; /* Untuk memastikan elemen sejajar vertikal */
            justify-content: center; /* Untuk membuat konten berada di tengah */
            padding: 5px; /* Kurangi padding untuk membuat footer lebih tipis */
            background-color: #021526;
            color: white;
            font-size: 8px; /* Ukuran font yang lebih kecil */
        }

        .footer-logo {
            max-width: 60px; /* Kecilkan ukuran logo */
            margin-right: 5px; /* Kurangi jarak antara logo dan teks */
        }

        .footer p {
            margin: 0;
            font-size: 8px; /* Ukuran font yang lebih kecil untuk teks copyright */
            font-family: 'League Spartan', sans-serif; /* Gaya font League Spartan Regular */
            color: #E2E2B6; /* Ubah warna tulisan Copyright */
        }

        .footer-separator {
            margin: 0 5px; /* Jarak antara logo dan teks copyright */
            color: #E2E2B6; /* Warna separator yang sama dengan warna teks */
        }

        .carousel-item img {
            width: 100%; /* Tetap mempertahankan lebar penuh gambar */
            height: 190px; /* Mengatur tinggi gambar slider */
            object-fit: cover; /* Membuat gambar tetap proporsional dan terpusat */
            position: relative;
        }

        .carousel-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Hitam dengan opasitas 0.5 */
            z-index: 1; /* Pastikan overlay berada di bawah teks */
        }

        .carousel-inner {
            position: relative; /* Posisi relatif untuk kontainer */
        }

        .techsmart-header-container {
            display: flex;
            justify-content: center; /* Horizontal center */
            align-items: center; /* Vertical center */
            height: 100px; /* Sesuaikan tinggi kontainer sesuai kebutuhan */
            margin: 0 auto;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/upload/logo.png" alt="Logo" width="161" height="97" class="d-inline-block align-text-top">
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


<!-- Carousel -->
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/upload/TENTANG1.jpg" alt="Slide 1">
            <div class="carousel-overlay"></div> <!-- Overlay hitam dengan opasitas -->
            <!-- Hapus carousel-caption untuk menghilangkan teks -->
        </div>
    </div>
</div>



<!-- Page Title -->
<div class="page-title">Produk Kami</div>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <a href="/">Beranda</a> <span> / Produk</span>
</div>


<!-- Article Header -->
<div class="article-header">Produk dari TechSmart Electronics</div>

<!-- Article Content -->
<div class="article-content">
    <img src="/upload/produk2.png" alt="TechSmart Image" class="article-image">

    <h2 class="article-title">Drone DJI Mini 3 Pro</h2>
    <p class="article-text">DJI Mini 3 Pro adalah drone kompak dan ringan yang menawarkan kualitas gambar dan video yang luar biasa. Dilengkapi dengan kamera 4K HDR dan
sensor CMOS 1/1.3 inci, drone ini mampu menghasilkan video beresolusi tinggi dan foto dengan detail yang tajam. Dengan waktu terbang hingga 34
menit dan fitur penghindaran hambatan tiga arah, DJI Mini 3 Pro sangat ideal untuk pemula maupun pengguna profesional. Mode Follow Me dan
ActiveTrack memastikan drone dapat mengikuti subjek dengan presisi, membuatnya sempurna untuk pengambilan video dinamis dan sinematik.

 </p>
</div>

<!-- Footer -->
<div class="footer">
    <img src="upload/logo.png" alt="Logo" class="footer-logo">
    <span class="footer-separator">|</span>
    <p>Copyright ©2024. Design by Bayu Valent</p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
