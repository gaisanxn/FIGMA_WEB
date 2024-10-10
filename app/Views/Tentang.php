<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet"/> <!-- Mengganti font ke Inter Medium -->

    <style>
        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background-color: #E2E2B6; /* Background warna luar */
        }
        .navbar-custom {
            background-color: #021526;
            height: 60px;
        }
        .navbar-nav .nav-item {
            margin: 0 10px;
        }
        .navbar-nav .nav-link {
            font-family: 'Lato', sans-serif;
            font-size: 11px;
            font-weight: 700;
            color: #E2E2B6 !important;
            padding: 10px;
            transition: color 0.3s ease, transform 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #FFD700 !important; /* Warna kuning saat hover */
            transform: scale(1.1) !important; /* Efek perbesaran */
        }

        /* Carousel Styles */
        .carousel-item img {
            width: 100%; /* Tetap mempertahankan lebar penuh gambar */
            height: 31vh; /* Mengatur tinggi gambar slider */
            object-fit: cover; /* Membuat gambar tetap proporsional dan terpusat */
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

        .page-title {
            position: absolute;
            left: 50%;
            top: 150px;
            transform: translateX(-50%);
            color: #E2E2B6;
            font-size: 48px;
            font-family: 'League Spartan', sans-serif;
            font-weight: 600;
            z-index: 2;
        }

        .breadcrumb {
            position: absolute;
            left: 50%;
            top: 220px;
            transform: translateX(-50%);
            font-size: 16px;
            font-family: 'League Spartan', sans-serif;
            font-weight: 400;
            z-index: 2;
        }

        .breadcrumb a {
            color: #FFD000;
            text-decoration: none;
        }

        .breadcrumb span {
            color: #E2E2B6;
        }

        .content {
    padding: 10px 50px;
    width: 100%; /* Mengisi 100% lebar halaman */
    margin: 50px auto;
    overflow: hidden; /* Menghindari float yang berantakan */
}


        .content-flex {
    display: flex;
    align-items: flex-start; /* Atur gambar dan teks agar mulai dari bagian atas */
}

.content img {
    margin-right: 35px; /* Jarak antara gambar dan teks */
    border-radius: 25px;
    width: 600px; /* Atur lebar gambar sesuai kebutuhan */
    height: 640px; /* Atur tinggi gambar sesuai kebutuhan */
    object-fit: cover; /* Mengisi area gambar sesuai ukuran yang diatur tanpa distorsi */
}


.content h2 {
    color: #6EACDA;
    font-size: 12px; /* Ukuran font judul */
    margin-top: 10px; /* Menghapus margin atas */
    font-family: 'Inter', sans-serif;
}

.content p {
    flex: 1; /* Membuat paragraf mengambil sisa ruang yang tersedia */
    text-align: left;
    line-height: 1.6;
    font-family: 'League Spartan', sans-serif;
    font-size: 20px; /* Ukuran font paragraf */
    font-weight: 600; /* Menambahkan efek Bold (700 = Bold) atau 500 untuk Medium */
    max-width: 600px; /* Batas maksimum lebar paragraf */
}


       

        /* Responsiveness */
        @media (max-width: 768px) {
            .content img {
                width: 100%;
                float: none;
                margin: 0 0 20px 0;
            }

            .page-title {
                font-size: 32px;
                top: 100px;
            }

            .breadcrumb {
                font-size: 14px;
                top: 180px;
            }

            .content h2 {
                font-size: 36px; /* Ukuran font diperbesar untuk mobile */
            }

            .content p {
                font-size: 18px; /* Ukuran font paragraf diperbesar untuk mobile */
            }
        }

        @media (max-width: 576px) {
            .page-title {
                font-size: 24px;
                top: 80px;
            }

            .breadcrumb {
                font-size: 12px;
                top: 150px;
            }

            .content h2 {
                font-size: 24px;
            }
        }
        .content > div {
    max-width: 4000px; /* Mengatur batas maksimum lebar teks */
    flex: 1; /* Membuat paragraf mengambil sisa ruang yang tersedia */
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
                <div class="carousel-overlay"></div>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <div class="page-title">Tentang Kami</div>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
    <a href="/">Beranda</a> <span> / Tentang</span>    </div>

    <div class="content">
        <div class="content-flex">
            <img src="/upload/beranda.jpg" alt="TechSmart Image" class="article-image">
            <div>
                <h2>TENTANG KAMI</h2>
                <p>
                    TechSmart Electronics adalah sebuah perusahaan yang bergerak di bidang penjualan alat elektronik dan teknologi, didirikan dengan misi untuk menyediakan produk-produk elektronik berkualitas tinggi dari merek-merek ternama. Kami melayani kebutuhan elektronik rumah tangga, pribadi, serta kebutuhan bisnis dengan menyediakan berbagai macam produk dari smartphone hingga perangkat rumah tangga pintar. Sejak didirikan, kami telah berkomitmen untuk memberikan layanan terbaik kepada pelanggan kami, dengan mengedepankan inovasi, kualitas, dan keunggulan dalam segala hal yang kami lakukan.
                </p>
                <p>
                TechSmart Electronics didirikan pada tahun 2012 oleh sekelompok profesional yang memiliki pengalaman bertahun-tahun di industri teknologi dan elektronik. Perusahaan ini lahir dari keinginan untuk menciptakan tempat di mana pelanggan dapat menemukan semua kebutuhan elektronik mereka dengan mudah dan dengan jaminan kualitas terbaik. Dalam satu dekade, TechSmart Electronics telah berkembang pesat dan memiliki beberapa cabang di berbagai kota besar di Indonesia, serta platform e-commerce yang memudahkan pelanggan dari seluruh negeri untuk berbelanja.
                </p>

            </div>
        </div>
    </div>

    <div class="footer">
    <img src="upload/logo.png" alt="Logo" class="footer-logo">
    <span class="footer-separator">|</span>
    <p>Copyright ©2024. Design by Bayu Valent</p>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
