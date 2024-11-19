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
            text-decoration: none; /* Menghapus garis bawah */


        }

        .navbar-nav .nav-link:hover {
            color: #FFD700 !important;
            /* Warna kuning saat hover */
            transform: scale(1.1) !important;
            /* Efek perbesaran */
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
        .carousel-inner {
    position: relative;
    width: 100%;
    height: 80vh; /* Tinggi slider 80% dari tinggi viewport */
    overflow: hidden;
}

.carousel-item {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.carousel-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.carousel-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Overlay hitam dengan transparansi */
    z-index: 1;
}

.carousel-caption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    z-index: 2;
    display: flex;
    flex-direction: column; /* Mengatur elemen dalam kolom */
    align-items: center; /* Memusatkan elemen secara horizontal */
    justify-content: center; /* Memusatkan elemen secara vertikal */
    text-align: center; /* Memusatkan teks */
    margin-top: 60px; /* Menambahkan margin atas untuk menggeser ke bawah */
}

.carousel-caption .carousel-tagline {
    font-size: 10px; /* Ukuran teks diperkecil */
    background-color: #FFA800; /* Background kuning */
    color: white; /* Warna teks */
    padding: 1px 5px; /* Padding disesuaikan */
    font-weight: bold;
    display: inline-block;
    margin-bottom: 8px;
}


.carousel-caption h1 {
    font-size: 2.2rem;
    font-weight: bold;
    color: #E2E2B6;
    font-family: 'Lexend Tera', sans-serif; /* Mengubah font menjadi Lexend Tera */
    padding: 10px 20px;
    display: inline-block;
    background-color: transparent; /* Menghapus background */
    white-space: nowrap; /* Mencegah teks membungkus ke baris baru */
    overflow: hidden; /* Menyembunyikan teks yang melebihi lebar */
    text-overflow: ellipsis; /* Menampilkan elipsis jika teks terlalu panjang */
    margin: 0; /* Menghapus margin agar tidak ada spasi tambahan */
}


.carousel-caption p {
    font-size: 0.8rem;
    font-family: 'Lexend Tera', sans-serif; /* Mengubah font menjadi Lexend Tera */
    background-color: transparent; /* Menghapus background */
    padding: 5px 10px;
    display: inline-block;
}





.article-header {
    width: 335px;
    height: 25px;
    background-color: #021526;
    border-radius: 4px;
    border: 1px solid #E2E2B6;
    text-align: center;
    font-family: 'Lexend Exa', sans-serif;
    color: #ffffff;
    font-size: 13px;
    margin: 0 auto;
    margin-top: 30px; /* Jarak atas tetap ada */
    margin-bottom: 0; /* Menghapus jarak bawah */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    /* Flexbox properties */
    display: flex; /* Mengaktifkan flexbox */
    align-items: center; /* Memusatkan secara vertikal */
    justify-content: center; /* Memusatkan secara horizontal */
    position: relative; /* Menambahkan konteks posisi */
    z-index: 10; /* Menentukan lapisan lebih tinggi */
}

.containertentang {
    display: flex;
    justify-content: center;
    align-items: center;
    height: auto;
    padding: 20px;
    margin-top: -30px;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
    max-width: 1600px; /* Mengatur lebar maksimal */
    width: 100%; /* Mengatur agar lebar penuh */
    margin-left: auto; /* Agar center secara horizontal */
    margin-right: auto; /* Agar center secara horizontal */
}

.contenttentang {
    background-color: #0d1b2a;
    color: #ffffff;
    border-radius: 20px;
    display: flex;
    padding: 20px;
    max-width: 100%; /* Ubah menjadi 100% agar mengikuti lebar containertentang */
    width: 100%; /* Mengatur lebar penuh */
}

        .image-section {
            flex: 1;
            padding-right: 20px;
        }
        .image-section img {
            width: 100%;
            border-radius: 20px;
        }
        .text-section {
            flex: 1;
            padding-left: 20px;
        }
        .text-section h2 {
            font-size: 12px;
            color: #6EACDA;
            margin-top: 15px;
            margin-bottom: 7px;
            font-family: 'Lato', sans-serif;
        }
        .text-section p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .text-section a {
    color: #E2E2B6;
    text-decoration: none;
    font-weight: bold;
    display: block; /* Menjadikan link berada di bawah tulisan */
    margin-top: 10px; /* Menambahkan jarak dari paragraf sebelumnya */
}



.read-more-link {
    color: #0F4872;
    font-family: 'League Spartan', sans-serif;
    font-size: 11px; /* Mengubah ukuran font menjadi lebih kecil */
    font-weight: 500; /* Mengubah font-weight menjadi medium */
    border-left: 3px solid #0F4872;
    background-color: rgba(110, 172, 218, 0.20);
    width: fit-content; /* Background mengikuti panjang teks */
    padding: 3px 10px; /* Mengatur padding agar lebih rapi */
    border-radius: 5px; /* Membuat sudut background lebih halus */
    text-decoration: none !important;
    display: inline-flex; /* Menggunakan inline-flex untuk menyejajarkan konten */
    align-items: center; /* Menyejajarkan konten secara vertikal */
    justify-content: center; /* Menyejajarkan konten secara horizontal */
}




.article-header2 {
    width: 250px;
    height: 25px;
    background-color: #021526;
    border-radius: 4px;
    border: 1px solid #E2E2B6;
    text-align: center;
    font-family: 'Lexend Exa', sans-serif;
    color: #ffffff;
    font-size: 13px;
    margin: 0 auto;
    margin-top: 30px; /* Jarak atas tetap ada */
    margin-bottom: -28px; /* Menghapus jarak bawah */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    /* Flexbox properties */
    display: flex; /* Mengaktifkan flexbox */
    align-items: center; /* Memusatkan secara vertikal */
    justify-content: center; /* Memusatkan secara horizontal */
    position: relative; /* Menambahkan konteks posisi */
    z-index: 10; /* Menentukan lapisan lebih tinggi */
}


.product-container {
    display: flex;
    justify-content: center; /* Mengatur produk agar berada di tengah */
    flex-wrap: wrap; /* Membungkus produk ke baris berikutnya jika tidak muat */
    margin: 20px 0; /* Memberikan jarak di atas dan bawah */
    gap: 20px; /* Mengatur jarak antar produk */
    background-color: #021526;
    padding: 10px 0; /* Menambahkan padding atas dan bawah */

}

.product-card {
    display: flex; /* Menyusun gambar dan informasi produk secara horizontal */
    align-items: center; /* Memusatkan elemen secara vertikal */
    padding: 15px;
    background-color: #041C32; /* Warna latar belakang serupa dengan gambar */
    position: relative; /* Menyediakan konteks untuk pseudo-element */
    border-radius: 10px; /* Membuat sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan sedikit lebih tebal */
    transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease; /* Animasi saat hover */
    width: 30%; /* Lebar 30% dari kontainer untuk memberikan ruang antar produk */
    max-width: 330px; /* Maksimum lebar card */
    margin: 10px; /* Margin di sekitar card */
    text-decoration: none; /* Menghilangkan garis bawah pada link */
    color: inherit; /* Mengambil warna teks dari elemen parent */
    text-decoration: none; /* Menghilangkan garis bawah pada link */

}

.product-card::before {
    content: ''; /* Membuat konten kosong untuk pseudo-element */
    position: absolute; /* Memposisikan secara absolut */
    top: 5px; /* Jarak dari atas */
    left: 5px; /* Jarak dari kiri */
    right: 5px; /* Jarak dari kanan */
    bottom: 5px; /* Jarak dari bawah */
    border: 2px solid #FFFFFF; /* Border berwarna putih */
    border-radius: 8px; /* Sudut border melengkung */
    pointer-events: none; /* Agar tidak mengganggu interaksi dengan card */
}

.product-card:hover {
    background-color: #02161D; /* Warna gelap saat hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5); /* Bayangan lebih dalam */
    transform: translateY(-5px); /* Mengangkat kartu sedikit saat hover */
    text-decoration: none;

}

.product-card img {
    border-radius: 5px; /* Sudut gambar sedikit melengkung */
    max-width: 150px; /* Mengatur lebar maksimum gambar */
    max-height: 120px; /* Mengatur tinggi maksimum gambar */
    object-fit: contain; /* Menjaga proporsi gambar dan tidak memotong */
    margin-right: 15px; /* Memberikan jarak antara gambar dan teks */
}

.product-info {
    flex: 1; /* Memastikan informasi produk mengambil ruang yang tersisa */
    color: #E2E2B6; /* Warna teks produk */
    display: flex; /* Menjadikan .product-info sebagai flex container */
    flex-direction: column; /* Mengatur arah elemen di dalamnya menjadi kolom */
    align-items: flex-end; /* Mengatur elemen agar rata kanan */
    text-decoration: none; /* Menghilangkan garis bawah secara default */

}

.product-info h2 {
    font-family: 'League Spartan', sans-serif; /* Gaya font untuk nama produk */
    font-size: 22px; /* Ukuran font serupa dengan gambar */
    color: #E2E2B6; /* Warna teks sesuai */
    margin: 0;
    text-align: right; /* Mengatur teks agar rata kanan */
    text-decoration: none; /* Menghilangkan garis bawah secara default */

    
}

.price {
    font-family: 'Arial', sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: #E50914; /* Warna merah untuk harga sesuai dengan gambar */
    margin-top: 10px;
    display: inline-block; /* Agar harga hanya sebesar konten */
    text-align: right; /* Mengatur teks agar rata kanan */
    width: 100%; /* Agar lebar harga mengisi ruang yang ada */
    text-decoration: none; /* Menghilangkan garis bawah secara default */

}

        .footer {
    display: flex;
    align-items: center; /* Untuk memastikan elemen sejajar vertikal */
    justify-content: center; /* Untuk membuat konten berada di tengah */
    padding: 5px; /* Kurangi padding untuk membuat footer lebih tipis */
    background-color: #021526;
    color: white;
    font-size: 8px; /* Ukuran font yang lebih kecil */
    margin-top: 20px; /* Menambahkan margin atas untuk memberi jarak dari elemen sebelumnya */
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
        


        .article-header3 {
    width: 250px;
    height: 25px;
    background-color: #021526;
    border-radius: 4px;
    border: 1px solid #E2E2B6;
    text-align: center;
    font-family: 'Lexend Exa', sans-serif;
    color: #ffffff;
    font-size: 13px;
    margin: 0 auto;
    margin-top: 95px; /* Menambahkan jarak atas */
    margin-bottom: -110px; /* Menghapus jarak bawah */
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    /* Flexbox properties */
    display: flex; /* Mengaktifkan flexbox */
    align-items: center; /* Memusatkan secara vertikal */
    justify-content: center; /* Memusatkan secara horizontal */
    position: relative; /* Menambahkan konteks posisi */
    z-index: 10; /* Menentukan lapisan lebih tinggi */
}


.container {
    display: flex;
    justify-content: center;
    align-items: stretch; /* Pastikan semua card sejajar pada posisi yang sama */
    width: 100%;
    max-width: 10000px;
    margin: 100px auto 20px;
    background-color: #0a1a2a;
    padding: 20px;
    gap: 20px; /* Menambahkan jarak antar kartu agar lebih rapi */
}

.card {
    position: relative;
    width: 80%; /* Kartu akan mengambil 80% dari lebar kontainer */
    height: 300px; /* Sesuaikan tinggi tetap untuk semua kartu */
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease, filter 0.3s ease; /* Transisi halus untuk rotasi dan filter */
}

.card img {
    width: 100%; /* Mengatur lebar gambar menjadi 100% dari lebar kartu */
    height: 100%; /* Mengatur tinggi gambar menjadi 100% dari tinggi kartu */
    object-fit: cover; /* Memastikan gambar memenuhi area kartu tanpa distorsi */
    border-radius: 15px;
    transition: transform 0.3s ease; /* Transisi halus untuk gambar */
}

.card:hover {
    transform: rotate(2deg); /* Rotasi sedikit saat dihover */
    filter: brightness(1.1); /* Mencerahkan kartu saat dihover */
}

.card:hover img {
    transform: scale(1.05); /* Membesar gambar saat dihover */
}

.card .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 15px;
    padding: 10px;
    transition: background 0.3s ease;
}

.card:hover .overlay {
    background: rgba(0, 0, 0, 0.9);
}

.card .overlay h2 {
    color: #E2E2B6;
    font-family: 'Lexend Exa', sans-serif;
    font-size: 1.0em;
    text-align: center;
    margin: 0;
}

.card .overlay p {
    font-family: 'Lexend Exa', sans-serif;
    color: #E2E2B6;
    font-size: 0.5em;
    text-align: center;
    margin: 0;
}

.separator {
    border: none;
    height: 3px;
    background-color: #FFFFFF;
    margin: 5px auto;
    width: 40%;
}

a {
    text-decoration: none;
    color: #E2E2B6;
}

a:hover {
    text-decoration: underline;
    color: rgba(255, 165, 0, 0.7);
}

    </style>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand">
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
            <img src="/upload/slider2.jpg" alt="Slide 1" class="carousel-image">
            <div class="carousel-overlay"></div> <!-- Overlay hitam dengan opasitas -->
            <div class="carousel-caption">
                <span class="carousel-tagline">WELCOME TO</span>
                <h1>TechSmart Electronics</h1>
                <p>Toko Serba Ada untuk Elektronik Canggih Anda</p>
            </div>
        </div>
        <!-- Tambahkan carousel-item lainnya jika diperlukan -->
    </div>
</div>


<!-- Hapus Page Title dan Breadcrumb -->

<!-- Article Header -->
<div class="article-header">Melayani dengan Teknologi dan Dedikasi</div>


<!-- TENTANG KAMI-->
<div class="containertentang">
   <div class="contenttentang">
    <div class="image-section"> 
    <img alt="Deskripsi gambar" height="500" width="500" src="<?= base_url('upload/' . $tentang->img_tentang); ?>" />
    </div>
    
    <div class="text-section">
     <h2>
      TENTANG KAMI
     </h2>
     <p>
        <?=$tentang->deskripsi_tentang?>
     </p>
     <p>
      <a href="/tentang" class="read-more-link">Baca Selengkapnya</a>
     </p>
    </div>
   </div>
  </div>
    </br>
<!-- Article Header 2 -->
<div class="article-header2">Jelajahi Produk Kami</div>


<div class="product-container">
  <?php foreach ($produk as $item): ?>
    <a href="<?= base_url('/produk/' . $item->slug); ?>" class="product-card">
      <img alt="produk" height="500" width="600" src="<?= base_url('upload/' . $item->img_produk); ?>" />
      <div class="product-info">
        <h2><?= esc($item->nama_produk); ?></h2>
        <div class="price">
          <?= esc($item->harga_produk); ?>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</div>



<!-- Article Header 3 -->
<div class="article-header3">Beberapa Aktivitas Kami</div>


  <!--Aktivitas-->
  <div class="container">
    <?php foreach ($aktivitas as $item): ?>
    <div class="card">
        <img alt="People at a technology conference" height="300" src="<?= base_url('upload/' . $item->img); ?>" width="400"/>
        <div class="overlay">
            <div>
                <h2><?= esc($item->judul_img); ?></h2>
                <hr class="separator">
                <p><a href="">Baca Selengkapnya</a></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
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
