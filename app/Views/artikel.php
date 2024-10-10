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
            color: #ffffff;
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
            color: #FFD700 !important;
            transform: scale(1.1) !important;
        }

        .main-content {
            position: relative;
            text-align: center;
            padding: 50px 20px;
            background-image: url('<?php echo base_url('upload/TENTANG1.jpg'); ?>');
            background-size: cover;
            background-position: center;
            height: 31vh;
            overflow: hidden;
        }

        .main-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .title-section h1 {
            position: relative;
            z-index: 2;
            font-weight: 600;
            font-size: 48px;
            color: #E2E2B6;
            font-family: 'League Spartan', sans-serif;
            margin-top: 40px;
        }

        .breadcrumb-section p {
            position: relative;
            z-index: 2;
            margin-top: 10px;
            font-family: 'League Spartan', sans-serif;
        }

        .highlight {
            color: #FFD700;
            font-family: 'League Spartan', sans-serif;
            text-decoration: none; /* Menghilangkan garis bawah default pada link */
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
            margin-bottom: 25px;
            white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
        }
        body {
            background-color: #E2E2B6; /* Background color */
            font-family: 'League Spartan', sans-serif;
        }

        .container {
            display: flex;
            max-width: 980px;
            margin: 20px auto;
            padding: 20px;
            background-color: #E2E2B6;
            border-radius: 20px;
        }

        .image {
            width: 330px;
            height: 310px;
            border-top-left-radius: 80px;
        }

        .content {
            padding-left: 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .header {
            display: flex;
            align-items: center;
            gap: 10px; /* Jarak antara title dan date */
            flex-wrap: nowrap; /* Memastikan elemen tetap dalam satu baris */
        }

        .title-company {
            color: #0F4872;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: -20px;
        }

        .date {
            color: #0F4872;
            font-size: 12px;
            font-family: 'Ubuntu', sans-serif;
            margin-bottom: -20px;
        }

        .title {
            color: #021526;
            font-size: 32px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: -25px;
        }

        .description {
            color: #021526;
            font-size: 20px;
            font-weight: 600;
            line-height: 32px;
            width: 600px;
            margin-bottom: -10px;
        }

        .read-more {
            position: relative;
            top: -20px; /* Angka negatif untuk menggeser ke atas */
        }

        .read-more-link {
            color: #0F4872;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            border-left: 3px solid #0F4872;
            padding-left: 10px;
            background-color: rgba(110, 172, 218, 0.20);
        }


        /* Container Reverse Styles */
        .container-reverse {
    flex-direction: row-reverse; /* Membalik posisi gambar dan konten */
}

.container-reverse .content-reverse {
    padding-left: 20px ; /* Kurangi jarak antara gambar dan konten */
}

.container-reverse .header-reverse {
    display: flex;
    align-items: center;
    gap: 10px; /* Jarak antara title dan date */
    flex-wrap: nowrap; /* Memastikan elemen tetap dalam satu baris */
}

.container-reverse .title-company-reverse {
    color: #0F4872;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: -20px; /* Sesuaikan jarak bawah title */
}

.container-reverse .date-reverse {
    color: #0F4872;
    font-size: 12px;
    font-family: 'Ubuntu', sans-serif;
    margin-bottom: -20px; /* Sesuaikan jarak bawah date */
}

.container-reverse .title-reverse {
    color: #021526;
    font-size: 32px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: -20px; /* Sesuaikan jarak bawah title */
}

.container-reverse .description-reverse {
    color: #021526;
    font-size: 20px;
    font-weight: 600;
    line-height: 32px;
    width: 600px;
    margin-bottom: -10px; /* Sesuaikan jarak bawah description */
}

.container-reverse .read-more-reverse {
    position: relative;
    top: -25px; /* Sesuaikan angka negatif untuk menggeser ke atas */
}

.container-reverse .read-more-link {
    color: #0F4872;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    border-left: 3px solid #0F4872;
    padding-left: 10px;
    background-color: rgba(110, 172, 218, 0.20);
}

.image1 {
    width: 340px;
    height: 305px;
    border-top-right-radius: 80px;
}


.container3 {
    display: flex;
    max-width: 980px;
    margin: 20px auto;
    padding: 20px;
    background-color: #E2E2B6;
    border-radius: 20px;
}

.image3 {
    width: 330px;
    height: 310px;
    border-top-left-radius: 80px;
}

.content3 {
    padding-left: 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.header3 {
    display: flex;
    align-items: center;
    gap: 10px; /* Jarak antara title dan date */
    flex-wrap: nowrap; /* Memastikan elemen tetap dalam satu baris */
}

.title-company3 {
    color: #0F4872;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: -20px;
}

.date3 {
    color: #0F4872;
    font-size: 12px;
    font-family: 'Ubuntu', sans-serif;
    margin-bottom: -20px;
}

.title3 {
    color: #021526;
    font-size: 32px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: -25px;
}

.description3 {
    color: #021526;
    font-size: 20px;
    font-weight: 600;
    line-height: 32px;
    width: 600px;
    margin-bottom: -10px;
}

.read-more3 {
    position: relative;
    top: -20px; /* Angka negatif untuk menggeser ke atas */
}

.read-more-link3 {
    color: #0F4872;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    border-left: 3px solid #0F4872;
    padding-left: 10px;
    background-color: rgba(110, 172, 218, 0.20);
}


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
        
    </style>
</head>
<body>
    <!-- Navbar -->
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
                    <li class="nav-item"><a class="nav-link" href="/tentang">TENTANG</a></li>
                    <li class="nav-item"><a class="nav-link" href="/produk">PRODUK</a></li>
                    <li class="nav-item"><a class="nav-link" href="/artikel">ARTIKEL</a></li>
                    <li class="nav-item"><a class="nav-link" href="/aktivitas">AKTIVITAS</a></li>
                    <li class="nav-item"><a class="nav-link" href="/kontak">KONTAK</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
        <div class="title-section">
            <h1>Artikel Kami</h1>
        </div>
        <div class="breadcrumb-section">
            <p><a href="/" class="highlight">Beranda</a> / Artikel</p>
        </div>
    </div>
<!-- Article Header -->
<div class="article-header">Artikel dari TechSmart Electronics</div>
    <!-- First Container (Image on Left) -->
    <div class="container">
        <img class="image" src="/upload/Artikel1.jpg" />
        <div class="content">
            <div class="header">
                <div class="title-company">TechSmart Electronics</div>
                <div class="date">08 JUNE 2024</div>
            </div>
            <div class="title">
                Inovasi Teknologi: Bagaimana TechSmart<br>Electronics Memimpin Pasar Elektronik
            </div>
            <div class="description">
            Dalam era digital yang terus berkembang, TechSmart Electronics telah memantapkan posisinya sebagai pemimpin dalam industri elektronik. Dengan fokus yang kuat pada inovasi dan kualitas, perusahaan ini telah memperkenalkan berbagai produk canggihyang memenuhi kebutuhan konsumen modern ...            </div>
            <div class="read-more">
            <a href="/artikel1" class="read-more-link">Baca Selengkapnya</a>
        </div>
        </div>
    </div>

       <!-- Second Container (Image on Right) -->
       <div class="container container-reverse">
        <img class="image1" src="/upload/Artikel2.jpg" />
        <div class="content content-reverse">
            <div class="header header-reverse">
                <div class="title-company title-company-reverse">TechSmart Electronics</div>
                <div class="date date-reverse">08 JUNE 2024</div>
            </div>
            <div class="title title-reverse">
            Masa Depan Pendidikan: Peran TechSmart
            Electronics dalam Transformasi Digital
            </div>
            <div class="description description-reverse">
            Transformasi digital telah mengubah berbagai aspek kehidupan kita, termasuk cara kita belajar dan mengajar. TechSmart Electronics berada di garis depan dalam mendukung revolusi ini, dengan menyediakan teknologi dan perangkat yang ...
          </div>
          <div class="read-more">
            <a href="/artikel2" class="read-more-link">Baca Selengkapnya</a>
        </div>
        </div>
    </div>

    <!-- Container 3 -->
<div class="container3">
    <img class="image3" src="/upload/Artikel3.jpg" />
    <div class="content3">
        <div class="header3">
            <div class="title-company3">TechSmart Electronics</div>
            <div class="date3">08 JUNE 2024</div>
        </div>
        <div class="title3">
        Keamanan dan Privasi di Era
        Digital:Solusi dari TechSmart Electronics
        </div>
        <div class="description3">
        Di era digital yang penuh dengan konektivitas, keamanan dan privasi menjadi prioritas utama bagi konsumen dan bisnis. TechSmart Electronics memahami pentingnya aspek ini dan telah mengambil langkah-langkah konkret untuk menghadirkan solusi yang melindungi data dan privasi pengguna. Dengan perangkat yang ...        </div>
        <div class="read-more">
            <a href="/artikel3" class="read-more-link">Baca Selengkapnya</a>
        </div>
    </div>
</div>



    <!-- Footer -->
    <div class="footer">
        <img src="/upload/logo.png" alt="Logo" class="footer-logo">
        <span class="footer-separator">|</span>
        <p>Copyright ©2024. Design by Bayu Valent</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
