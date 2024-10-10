<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - TechSmart Electronics</title>
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

        .contact-section {
            padding: 60px 0;
            display: flex;
            justify-content: center;
            background-color: #E2E2B6;
        }

        .contact-card {
            display: flex;
            flex-direction: row;
            background-color: #0d1b2a;
            border-radius: 10px;
            width: 75%;
            margin: auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            height: 370px;
            width: 850px;
        }

        .map-container {
            background-color: #f4e1a1; /* Warna background kuning */
            border-radius: 10px 0 0 10px; /* Sudut melengkung untuk kiri */
            overflow: hidden; /* Memastikan peta tidak keluar dari sudut melengkung */
            width: 50%; /* Memastikan peta memenuhi setengah lebar */
        }

        iframe {
            border: 0;
            width: 100%; /* Memastikan peta memenuhi lebar container */
            height: 400px; /* Ukuran tinggi peta */
        }

        .contact-info {
    color: #ffffff;
    font-family: 'Lexend Exa', sans-serif;
    padding: 20px;
    border-radius: 0 15px 15px 0;
    background-color: #0d1b2a;
    width: 50%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    text-align: left; /* Konten tetap rata kiri */
    margin-top: 72px;
    margin-left: 10px;
}

.contact-info h2 {
    font-size: 26px;
    margin-bottom: 15px;
    color: #f0a500;
    font-weight: 700;
    margin-left: 3px;

}

.contact-info h3 {
    font-size: 10px;
    margin-bottom: 15px;
    color: #f0a500;
    margin-top: 15px;
    margin-left: 3px;

}

.contact-info p {
    font-size: 16px;
    margin: 8px 0;
    display: flex;
    align-items: center;
    margin-left: 3px;

}

.contact-info h6 {
    font-size: 12px;
    margin: 8px 0;
    display: flex;
    align-items: center;
}

.contact-info h6 i {
    margin-right: 10px;
    color: #f0a500;
    margin-left: 3px;

}

.contact-info a {
    color: #f0a500;
    text-decoration: none;
    font-weight: bold;
    margin-left: 3px;

}

.contact-info a:hover {
    color: #ffffff;
    text-decoration: underline;
    margin-left: 3px;

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
                <li class="nav-item"><a class="nav-link" href="/tentang">TENTANG</a></li> <!-- Link ke halaman Tentang -->
                <li class="nav-item"><a class="nav-link" href="/produk">PRODUK</a></li>
                <li class="nav-item"><a class="nav-link" href="/artikel">ARTIKEL</a></li>
                <li class="nav-item"><a class="nav-link" href="/aktivitas">AKTIVITAS</a></li>
                <li class="nav-item"><a class="nav-link" href="/kontak">KONTAK</a></li> <!-- Link ke halaman Kontak -->

            </ul>
        </div>
    </div>
</nav>


    <!-- Main Content -->
    <div class="main-content">
        <div class="title-section">
            <h1>Kontak Kami</h1>
        </div>
        <div class="breadcrumb-section">
    <p><a href="/" class="highlight">Beranda</a> / Kontak</p>
</div>

    </div>

    <!-- Contact Section -->
    <div class="contact-section">
        <div class="contact-card">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63214.58139900922!2d112.62064327855602!3d-8.008079959780565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd627d22b39369f%3A0xec18b0aca913f173!2sKec.%20Kedungkandang%2C%20Kota%20Malang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1727058685696!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-info">
                <h2>TechSmart Electronics</h2>
                <p>Jln. YangLurus, Rt 33 Rw 21,</p>
                <p>Kedungkandang, Malang, Jawa Timur</p>
                <div class="contact-info1">
    <h3>Hubungi Kami</h3>
    <h6><i class="fas fa-phone-alt"></i> <a href="https://wa.me/6282229310283" target="_blank" style="color: #f0a500; text-decoration: none;">+62 822-2931-0283</a></h6>
    <h6><i class="fas fa-envelope"></i> <a href="mailto:uyabvalent@gmail.com" style="color: #f0a500; text-decoration: none;">uyabvalent@gmail.com</a></h6>
    </div>

            </div>
        </div>
    </div>

    

    <!-- Footer -->
    <div class="footer">
        <img src="/upload/logo.png" alt="Logo" class="footer-logo">
        <span class="footer-separator">|</span>
        <p>Copyright ©2024. Design by Bayu Valent</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
