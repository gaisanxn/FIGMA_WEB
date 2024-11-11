<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beranda</title>
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
    padding: 0; /* Menghilangkan padding untuk mengurangi tinggi background */
    border-bottom: 1px solid transparent; /* Tambahkan batas bawah jika diperlukan */
}
/* Navbar Brand (Logo) */
.navbar-brand img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    width: 110px; /* Ukuran default gambar lebih kecil */
    margin-left: 30px; /* Geser logo ke kanan dengan menambah margin kiri */
}

    /* Navbar Links */
.navbar-nav .nav-item {
    margin: 10px; /* Menghilangkan margin antar item navbar */
}

.navbar-nav .nav-link {
    font-family: 'Lato', sans-serif;
    font-size: 12px; /* Ukuran font dapat disesuaikan lebih kecil */
    font-weight: 700;
    color: #E2E2B6 !important;
    padding: 5px 8px; /* Mengurangi padding lebih lanjut untuk mengurangi tinggi */
    transition: color 0.3s ease, transform 0.3s ease;
}
.navbar-nav .nav-link:hover {
    color: #FFD700 !important; /* Warna kuning saat hover */
    transform: scale(1.1) !important; /* Efek perbesaran */
}
/* Responsivitas dengan Media Queries */
@media (max-width: 992px) { /* Untuk layar medium (tablet) */
    .navbar-brand img {
        width: 100px; /* Perkecil ukuran gambar pada layar tablet */
    }
    .navbar-nav .nav-link {
        font-size: 9px; /* Perkecil ukuran font */
    }
}

@media (max-width: 768px) { /* Untuk layar kecil (smartphone) */
    .navbar-brand img {
        width: 80px; /* Ukuran gambar lebih kecil */
    }
    .navbar-nav .nav-link {
        font-size: 8px; /* Sesuaikan ukuran font */
        padding: 4px;   /* Sesuaikan padding lebih kecil */
    }
}
@media (max-width: 576px) { /* Untuk layar extra kecil (smartphone kecil) */
    .navbar-brand img {
        width: 70px; /* Ukuran gambar lebih kecil untuk smartphone */
    }
    .navbar-nav .nav-link {
        font-size: 7px;  /* Lebih kecil untuk layar kecil */
        padding: 2px;    /* Sesuaikan padding lebih kecil */
    }
}
/* Navbar Toggle Customization */
.navbar-toggler {
    z-index: 1050; /* Tetap di depan elemen lain */
    position: relative;
    transition: all 0.3s ease; /* Transisi smooth */
}
.navbar-collapse {
    background-color: transparent; /* Tidak ada background pada collapse */
    position: relative;
    z-index: 1049;
    transition: all 0.3s ease-in-out;
}/* Menu background saat toggle aktif */
.navbar-collapse.show {
    background-color: #021526; /* Background hanya pada menu */
    width: 30%; /* Kurangi lebar saat efek, lebih kecil dari sebelumnya */
    border-radius: 0 0px 15px 0; /* Tambahkan sedikit efek rounded di ujung */
}

/* Navbar item pada layar kecil */
.navbar-nav .nav-item {
    width: 100%; /* Menu menyesuaikan ukuran */
    transition: background-color 0.3s ease;
}
/* Responsivitas */
@media (max-width: 992px) { /* Tablet */
    .navbar-collapse {
        width: 45%; /* Lebar lebih kecil pada layar medium */
        position: absolute;
        top: 56px; /* Posisi navbar collapse di bawah navbar */
        left: 0;
        padding: 1rem;
        border-radius: 0 10px 10px 0; /* Efek rounded pada ujung kanan */
    }
}
@media (max-width: 768px) { /* Smartphone */
    .navbar-collapse {
        width: 40%; /* Kurangi lagi lebar pada layar kecil */
    }
}
@media (max-width: 576px) { /* Smartphone kecil */
    .navbar-collapse {
        width: 35%; /* Lebar lebih kecil lagi pada layar ekstra kecil */
    }
}
/* Reset basic styles */
.carousel-inner img {
    width: 100%; /* Mengatur gambar agar lebar sesuai dengan container */
    height: auto; /* Mengatur tinggi gambar secara otomatis */
    object-fit: cover; /* Memastikan gambar menyesuaikan tanpa terdistorsi */
    max-height: 30vh; /* Membatasi tinggi gambar agar lebih pendek */
}
.carousel-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Overlay transparan */
    z-index: 1;
}
/* Wrapper untuk page title dan breadcrumb */
.carousel-caption-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex; /* Gunakan flexbox */
    align-items: center; /* Vertikal center */
    justify-content: center; /* Horizontal center */
    z-index: 2;
}
.text-center {
    text-align: center;
    color: #E2E2B6;
}
/* Page Title */
.page-title {
    font-size: 36px; /* Ukuran lebih kecil */
    font-family: 'League Spartan', sans-serif;
    font-weight: 600;
    margin-bottom: 10px;
}
/* Breadcrumb */
.breadcrumb {
    font-size: 14px; /* Ukuran lebih kecil */
    font-family: 'League Spartan', sans-serif;
    font-weight: 400;
    margin-top: 10px; /* Memberi jarak ke bawah */
    text-align: center; /* Membuat breadcrumb berada di tengah */
    display: block; /* Pastikan block untuk text-align bekerja */
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
        font-size: 36px; /* Lebih kecil dari sebelumnya */
    }
    .breadcrumb {
        font-size: 14px; /* Lebih kecil dari sebelumnya */
    }
    .carousel-inner img {
        max-height: 35vh; /* Membatasi tinggi gambar di layar besar */
    }
}
/* Laptop */
@media (min-width: 1024px) and (max-width: 1439px) {
    .page-title {
        font-size: 32px; /* Ukuran lebih kecil untuk laptop */
        margin-top: 15px; /* Jarak lebih besar untuk desktop */
    }
    .breadcrumb {
        font-size: 12px; /* Ukuran lebih kecil */
    }
    .carousel-inner img {
        max-height: 30vh; /* Membatasi tinggi gambar di laptop */
    }
}
/* Tablet */
@media (min-width: 769px) and (max-width: 1023px) {
    .page-title {
        font-size: 28px; /* Ukuran lebih kecil untuk tablet */
    }
    .breadcrumb {
        font-size: 12px; /* Lebih kecil */
        margin-top: 8px; /* Jarak medium untuk tablet */
    }
    .carousel-inner img {
        max-height: 25vh; /* Membatasi tinggi gambar di tablet */
    }
}
/* Mobile */
@media (max-width: 768px) {
    .page-title {
        font-size: 24px; /* Ukuran lebih kecil untuk mobile */
        margin-top: 5px; /* Jarak lebih kecil untuk perangkat mobile */
    }
    .breadcrumb {
        font-size: 10px; /* Lebih kecil */
    }
    .carousel-inner img {
        max-height: 20vh; /* Membatasi tinggi gambar di mobile */
    }
    .carousel-caption-wrapper {
        top: 0;
    }
}
/* Small Mobile */
@media (max-width: 480px) {
    .page-title {
        font-size: 20px; /* Ukuran lebih kecil untuk layar kecil */
    }
    .breadcrumb {
        font-size: 8px; /* Lebih kecil */
    }
}

.carousel-inner img {
        max-height: 18vh; /* Membatasi tinggi gambar di layar kecil */
    }

/* Gaya Dasar */
body {
    font-family: 'League Spartan', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #E2E2B6;
}

/* Contact Section */
.contact-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    gap: 20px;
    max-width: 900px;
    margin: 20px auto;
    border-radius: 15px;
    background-color: #E2E2B6;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.contact-section iframe {
    width: 100%;
    height: 300px;
    border: none;
    border-radius: 10px;
}

/* Contact Info */
.contact-info {
    text-align: center;
    padding: 20px;
}

.contact-info h2 {
    color: #333333;
    margin-bottom: 10px;
}

.contact-info p {
    color: #666666;
    font-size: 16px;
    margin-bottom: 20px;
}

.contact-info-details h3 {
    color: #f0a500;
    font-size: 18px;
    margin-bottom: 10px;
}

.contact-info-details h6 {
    display: flex;
    align-items: center;
    font-size: 16px;
    color: #333333;
    margin: 5px 0;
}

.contact-info-details h6 i {
    margin-right: 10px;
    color: #f0a500;
}

.contact-info-details span {
    color: #f0a500;
}

/* Responsive Layout */
@media (min-width: 768px) {
    .contact-section {
        flex-direction: row;
        justify-content: space-between;
    }

    .contact-info {
        text-align: left;
        max-width: 400px;
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
        </style>
</head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
    <a class="navbar-brand">
            <img src="/upload/<?=$kontak->img_navbar?>" alt="Logo" width="161" height="97" class="d-inline-block align-text-top">
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
            <img src="/upload/<?=$kontak->img_slider?>" alt="Slide 1" class="d-block w-100" style="height:auto;">
            <div class="carousel-overlay"></div>
        </div>
        </div>

    <!-- Page Title and Breadcrumb -->
    <div class="carousel-caption-wrapper d-flex align-items-center justify-content-center">
        <div class="text-center">
            <div class="page-title">Kontak Kami</div>
            <div class="breadcrumb">
                <a href="/">Beranda</a> <span> / Kontak</span>
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
        <p><?= $kontak->alamat_kontak ?></p>

        <div class="contact-info-details">
            <h3>Hubungi Kami</h3>
            <h6>
                <i class="fas fa-phone-alt"></i>
                <span>+62 822-0011-2233</span>
            </h6>
            <h6>
                <i class="fas fa-envelope"></i>
                <span>ggsantai@gmail.com</span>
            </h6>
        </div>
    </div>
</div>

    <!-- Footer -->
    <div class="footer">
    <img src="upload/<?=$kontak->img_footer?>" alt="Logo" class="footer-logo">
    <span class="footer-separator">|</span>
    <p>Copyright ©2024. Design by Bayu Valent</p>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    </body>
</html>

