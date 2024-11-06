<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Kami - TechSmart Electronics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #0d1b2a;
            color: #000000;
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
}

/* Menu background saat toggle aktif */
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

    .carousel-inner img {
        max-height: 18vh; /* Membatasi tinggi gambar di layar kecil */
    }
}

      
/* Gaya Dasar */
body {
    background-color: #E2E2B6;
    font-family: 'League Spartan', sans-serif;
    margin: 0;
    padding: 0;
}

.container, .container3, .container-reverse {
    display: flex;
    align-items: center; /* Memastikan gambar dan konten berada di tengah */
    justify-content: center; /* Untuk konten dan gambar tetap di tengah secara horizontal */
    flex-direction: row; /* Default: gambar di kiri, konten di kanan */
    max-width: 980px;
    margin: 20px auto;
    padding: 20px;
    background-color: #E2E2B6;
    border-radius: 20px;
    box-sizing: border-box;
    gap: 20px;
}

/* Ukuran Tetap untuk Gambar */
.image {
    width: 330px;
    height: 340px; /* Membuat gambar .image sedikit lebih tinggi */
    border-top-left-radius: 80px;
    object-fit: cover;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.image1, .image3 {
    width: 330px;
    height: 310px; /* Tetap pada tinggi asli */
    border-top-left-radius: 80px;
    object-fit: cover;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}



.content, .content3, .content-reverse {
    display: flex;
    flex-direction: column;
    text-align: left;
    padding: 15px;
    box-sizing: border-box;
}

/* Responsif untuk Gambar */
@media (max-width: 768px) {
    .container, .container3, .container-reverse {
        flex-direction: column; /* Pada mobile, gambar berada di atas konten */
    }

    .image {
    width: 330px;
    height: 340px; /* Membuat gambar .image sedikit lebih tinggi */
    border-top-left-radius: 80px;
    object-fit: cover;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

.image1, .image3 {
    width: 330px;
    height: 310px; /* Tetap pada tinggi asli */
    border-top-left-radius: 80px;
    object-fit: cover;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

}

.title, .title2, .title3 {
    color: #021526;
    font-size: 28px;
    font-weight: 700;
    line-height: 1.2;
    margin: 10px 0;
}

.description, .description2, .description3 {
    color: #021526;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.5;
    max-width: 100%;
    margin: 10px 0;
}

.read-more-link, .read-more-link3, .read-more-link-reverse {
    color: #0F4872;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    border-left: 3px solid #0F4872;
    padding-left: 10px;
    background-color: rgba(110, 172, 218, 0.20);
}

/* Untuk layar di bawah 480px */
@media (max-width: 480px) {
    .container, .container3, .container-reverse {
        flex-direction: column;
    }

    .image {
        width: 280px;
        height: 290px; /* Mengurangi ukuran untuk layar yang lebih kecil */
        border-top-left-radius: 60px;
        object-fit: cover;
    }

    .image1, .image3 {
        width: 280px;
        height: 270px;
        border-top-left-radius: 60px;
        object-fit: cover;
    }

    .title, .title2, .title3 {
        font-size: 24px;
        margin: 8px 0;
    }

    .description, .description2, .description3 {
        font-size: 14px;
        line-height: 1.4;
    }

    .read-more-link, .read-more-link3, .read-more-link-reverse {
        font-size: 12px;
        padding-left: 8px;
        border-left-width: 2px;
    }
}

/* Untuk layar di bawah 320px */
@media (max-width: 320px) {
    .container, .container3, .container-reverse {
        flex-direction: column;
    }

    .image {
        width: 240px;
        height: 250px; /* Menyesuaikan ukuran lagi untuk layar sangat kecil */
        border-top-left-radius: 50px;
        object-fit: cover;
    }

    .image1, .image3 {
        width: 240px;
        height: 230px;
        border-top-left-radius: 50px;
        object-fit: cover;
    }

    .title, .title2, .title3 {
        font-size: 20px;
        margin: 6px 0;
    }

    .description, .description2, .description3 {
        font-size: 12px;
        line-height: 1.3;
    }

    .read-more-link, .read-more-link3, .read-more-link-reverse {
        font-size: 11px;
        padding-left: 6px;
        border-left-width: 2px;
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
    

<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="/upload/<?=$artikel->img_navbar?>" alt="Logo" width="161" height="97" class="d-inline-block align-text-top">
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
            <img src="/upload/<?=$artikel->img_slider?>" alt="Slide 1" class="d-block w-100" style="height:auto;">
            <div class="carousel-overlay"></div>
        </div>
    </div>

    <!-- Page Title and Breadcrumb -->
    <div class="carousel-caption-wrapper d-flex align-items-center justify-content-center">
        <div class="text-center">
            <div class="page-title">Artikel Kami</div>
            <div class="breadcrumb">
                <a href="/">Beranda</a> <span> / Artikel</span>
            </div>
        </div>
    </div>
</div>


    <!-- First Container (Image on Left) -->
    <div class="container">
        <img class="image" src="/upload/<?=$artikel->img_1?>" />
        <div class="content">
            <div class="header">
                
                <div class="date"><?=$artikel->date_1?></div>
            </div>
            <div class="title">
            <?=$artikel->title_1?>
            </div>
            <div class="description">
            <?=$artikel->desk_1?>  </div>
            <div class="read-more">
            <a href="/artikel1" class="read-more-link">Baca Selengkapnya</a>
        </div>
        </div>
    </div>

       <!-- Second Container (Image on Right) -->
       <div class="container container-reverse">
        <img class="image1" src="/upload/<?=$artikel->img_2?>" />
        <div class="content content-reverse">
            <div class="header header-reverse">
                <div class="date date-reverse"><?=$artikel->date_2?></div>
            </div>
            <div class="title title-reverse">
            <?=$artikel->title_2?>
            </div>
            <div class="description description-reverse">
            <?=$artikel->desk_2?>          </div>
          <div class="read-more">
            <a href="/artikel2" class="read-more-link">Baca Selengkapnya</a>
        </div>
        </div>
    </div>

    <!-- Container 3 -->
<div class="container3">
    <img class="image3" src="/upload/<?=$artikel->img_3?>" />
    <div class="content3">
        <div class="header3">
            <div class="date3"><?=$artikel->date_3?></div>
        </div>
        <div class="title3">
        <?=$artikel->title_3?>
        </div>
        <div class="description3">
        <?=$artikel->desk_3?>                  </div>
        <div class="read-more">
            <a href="/artikel3" class="read-more-link">Baca Selengkapnya</a>
        </div>
    </div>
</div>



    <!-- Footer -->
    <div class="footer">
    <img src="upload/logo.png" alt="Logo" class="footer-logo">
    <span class="footer-separator">|</span>
    <p>Copyright ©2024. Design by Bayu Valent</p>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
