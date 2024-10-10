<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aktivitas</title>
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
            width: 305px;
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

       

.article-image {
    width: 100%; /* Gambar mengisi lebar container sepenuhnya */
    height: 500px; /* Mengatur tinggi gambar secara eksplisit */
    object-fit: cover; /* Agar gambar tetap proporsional tanpa distorsi */
    display: block;
    margin: 0;
    border-top-right-radius: 70px; /* Radius untuk gambar kanan atas */
}

.article-title {
    font-family: 'Lexend exa', sans-serif;
    font-size: 14px;
    color: #021526;
    font-weight: 600;
    max-width: 800px; /* Lebar maksimal */
    background-color: #E2E2B6;
    border-radius: 4px;
    border: 1px solid #021526;
    text-align: center;
    padding: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    /* Flexbox untuk sentralisasi horizontal dan vertikal */
    display: flex;
    justify-content: center; /* Sentralisasi horizontal */
    align-items: center;     /* Sentralisasi vertikal */
    
    /* Penyesuaian posisi */
    position: relative;
    top: -15px;
    z-index: 1;
    
    /* Agar background menyesuaikan panjang teks */
    width: fit-content; /* Lebar sesuai teks */
    margin: 0 auto; /* Menempatkan di tengah secara horizontal */


    /* Mengatur tinggi background */
    height: 25px; /* Atur tinggi sesuai kebutuhan */
}




.article-text {
    font-family: 'League Spartan', sans-serif;
    font-size: 18px;
    color: #E2E2B6;
    line-height: 1.8; /* Jarak antar baris */
    letter-spacing: 0.5px; /* Spasi antar huruf */
    word-spacing: 1px; /* Spasi antar kata */
    margin: 8px;
    padding: 0 10px; /* Memberi jarak di kiri dan kanan */
    margin-bottom: 20px;

    /* Atur teks rata tengah */
    text-align: center;

    /* Mengatur posisi lebih ke atas */
    margin-top: -10px; /* Sesuaikan nilai sesuai kebutuhan */
    padding-bottom: 10px;
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



       /* Wrapper untuk menampung seluruh konten 1 */
.wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #e6e4b3; /* Background berwarna kuning lembut */
    border-radius: 8px; /* Sudut melengkung untuk tampilan modern */
    max-width: 1000px;
    margin: 50px auto;
}

/* Bagian gambar */
/* Bagian gambar dengan rasio 16:9 */
.image-section {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 100%;
    padding-bottom: 25.56%; /* 16:9 aspect ratio (9 / 16 = 0.5625 or 56.25%) */
}

.image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Memastikan gambar terisi penuh tanpa merusak proporsi */
    filter: brightness(0.8); /* Menerapkan efek gelap dengan mengurangi kecerahan */

}


/* Bagian teks */
.text-section {
    flex: 1;
    padding-left: 20px;
}

.content-box {
    background-color: #f6f4d0; /* Background warna kotak teks */
    padding: 20px;
    height: 200px;
    position: relative;
    font-family: 'League Spartan', sans-serif; /* Terapkan font League Spartan ke seluruh box */
}

.title {
    font-size: 22px;
    color: #3e5942; /* Warna judul sesuai dengan garis */
    margin-bottom: 10px;
    font-weight: bold;
    font-family: 'League Spartan', sans-serif; /* Terapkan font League Spartan pada judul */
}

.description {
    font-size: 16px;
    font-style: bold;
    color: #444;
    line-height: 1.6;
    margin-bottom: 20px;
    font-family: 'League Spartan', sans-serif; /* Terapkan font League Spartan pada deskripsi */
}

/* Tautan baca selengkapnya */
.read-more {
  color: #0F4872;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    border-left: 3px solid #0F4872;
    padding-left: 5px;
    background-color: rgba(110, 172, 218, 0.20);
    position: relative;
    top: -20px; /* Angka negatif untuk menggeser ke atas */
    opacity: 75%; /* ketebalan warna baca selengkapnya */

}

.read-more:hover {
    color: #008CBA; /* Warna saat di-hover */
    border-bottom-color: #008CBA;
}


/* Wrapper untuk menampung seluruh konten 2 */
.wrapper2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #e6e4b3; /* Background berwarna kuning lembut */
    border-radius: 8px; /* Sudut melengkung untuk tampilan modern */
    max-width: 1000px;
    margin: 50px auto;
}

/* Bagian gambar */
/* Bagian gambar dengan rasio 16:9 */
.image-section2 {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 100%;
    padding-bottom: 25.56%; /* 16:9 aspect ratio (9 / 16 = 0.5625 or 56.25%) */
}

.image2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Memastikan gambar terisi penuh tanpa merusak proporsi */
}


/* Bagian teks */
.text-section2 {
    flex: 1;
    padding-left: 20px;
}

.content-box2 {
    background-color: #f6f4d0; /* Background warna kotak teks */
    padding: 20px;
    height: 210px;
    position: relative;
    font-family: 'League Spartan', sans-serif; /* Terapkan font League Spartan ke seluruh box */
}
.content-box3 {
    background-color: #f6f4d0; /* Background warna kotak teks */
    padding: 20px;
    height: 230px;
    position: relative;
    font-family: 'League Spartan', sans-serif; /* Terapkan font League Spartan ke seluruh box */
}
.title2 {
    font-size: 22px;
    color: #3e5942; /* Warna judul sesuai dengan garis */
    margin-bottom: 10px;
    font-weight: bold;
    font-family: 'League Spartan', sans-serif; /* Terapkan font League Spartan pada judul */
}

.description2 {
    font-size: 16px;
    font-style: bold;
    color: #444;
    line-height: 1.6;
    margin-bottom: 20px;
    font-family: 'League Spartan', sans-serif; /* Terapkan font League Spartan pada deskripsi */
}

/* Tautan baca selengkapnya */
.read-more2 {
  color: #0F4872;
    font-size: 12px;
    font-weight: 600;
    text-decoration: none;
    border-left: 3px solid #0F4872;
    padding-left: 5px;
    background-color: rgba(110, 172, 218, 0.20);
    position: relative;
    top: -20px; /* Angka negatif untuk menggeser ke atas */
    opacity: 75%; /* ketebalan warna baca selengkapnya */

}

.read-more:hover2 {
    color: #008CBA; /* Warna saat di-hover */
    border-bottom-color: #008CBA;
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
<div class="page-title">Aktivitas Kami</div>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <a href="/">Beranda</a> <span> / Aktivitas</span>    </div>

<!-- Article Header -->
<div class="article-header">Aktivitas dari TechSmart Electronics</div>

<!-- konten 1 -->
<div class="wrapper">
    <div class="image-section">
        <img src="upload/aktivitas1.jpg" alt="Peluncuran Produk Baru" class="image">
    </div>
    <div class="text-section">
        <div class="content-box">
            <h2 class="title">Peluncuran Produk Baru</h2>
            <p class="description">
                Setiap tahun, TechSmart Electronics secara rutin mengadakan acara peluncuran produk baru untuk memperkenalkan inovasi terbaru di dunia elektronik kepada pelanggan kami. Peluncuran produk ini tidak hanya sekadar ...
            </p>
            <a href="/aktivitas1" class="read-more">Baca Selengkapnya</a>
        </div>
    </div>
</div>

<!-- konten 2 -->
<div class="wrapper2">
    <div class="image-section2">
        <img src="upload/aktivitas2.jpeg" alt="Peluncuran Produk Baru" class="image">
    </div>
    <div class="text-section2">
        <div class="content-box2">
            <h2 class="title2">Program Pelatihan Teknologi
            dan Workshop</h2>
            <p class="description2">
            Setiap tahun, TechSmart Electronics berkomitmen untuk memberdayakan komunitas dengan pengetahuan teknologi yang praktis dan aplikatif melalui program pelatihan dan workshop rutin yang kami selenggarakan. Program ini ...
          </p>
          <a href="/aktivitas2"class="read-more2">Baca Selengkapnya</a>
        </div>
    </div>
</div>

<!-- konten 3 = 1 -->
<div class="wrapper">
    <div class="image-section">
        <img src="upload/aktivitas3.jpg" alt="Peluncuran Produk Baru" class="image">
    </div>
    <div class="text-section">
        <div class="content-box">
            <h2 class="title">Kegiatan CSR</h2>
            <p class="description">
            Sebagai perusahaan yang peduli terhadap masyarakat dan lingkungan, TechSmart Electronics berkomitmen untuk menjalankan berbagai program Corporate Social Responsibility (CSR) yang bermanfaat. Kami percaya bahwa ...            </p>
            <a href="/aktivitas3" class="read-more">Baca Selengkapnya</a>
        </div>
    </div>
</div>

<!-- konten 4 = 2 -->
<div class="wrapper2">
    <div class="image-section2">
        <img src="upload/aktivitas4.jpg" alt="Peluncuran Produk Baru" class="image">
    </div>
    <div class="text-section2">
        <div class="content-box3">
            <h2 class="title2">Partisipasi dalam Pameran
            dan Konferensi Teknologi</h2>
            <p class="description2">
            Untuk tetap relevan dan kompetitif di industri teknologi yang selalu berkembang, TechSmart Electronics secara aktif berpartisipasi dalam berbagai pameran dan konferensi teknologi baik di dalam maupun luar negeri. Pameran ini ...          </p>
            <a href="/aktivitas4" class="read-more2">Baca Selengkapnya</a>
        </div>
    </div>
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
