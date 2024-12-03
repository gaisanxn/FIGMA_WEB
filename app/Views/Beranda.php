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
    padding: 10px; /* Menambahkan padding untuk memberi ruang */
    box-sizing: border-box; /* Agar padding tidak mengubah ukuran elemen */
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
    font-family: 'Lexend Tera', sans-serif;
    padding: 10px 20px;
    display: inline-block;
    background-color: transparent;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: 0 0 10px 0; /* Menambahkan margin bawah untuk memberi jarak dengan elemen berikutnya */
}

.carousel-caption p {
    font-size: 0.8rem;
    font-family: 'Lexend Tera', sans-serif; /* Mengubah font menjadi Lexend Tera */
    background-color: transparent; /* Menghapus background */
    padding: 5px 10px;
    display: inline-block;
    margin: 0; /* Menghapus margin agar tidak ada spasi tambahan */

}

/* Media Queries untuk Responsivitas */
@media (max-width: 1200px) {
    .carousel-caption h1 {
        font-size: 1.8rem;
    }

    .carousel-caption p {
        font-size: 0.7rem;
    }

    .carousel-caption .carousel-tagline {
        font-size: 9px;
        padding: 2px 4px;
    }
}

@media (max-width: 992px) {
    .carousel-caption {
        margin-top: 40px;
    }

    .carousel-caption h1 {
        font-size: 1.5rem;
    }

    .carousel-caption p {
        font-size: 0.6rem;
    }

    .carousel-caption .carousel-tagline {
        font-size: 8px;
    }
}

@media (max-width: 768px) {
    .carousel-caption {
        margin-top: 30px;
    }

    .carousel-caption h1 {
        font-size: 1.2rem;
    }

    .carousel-caption p {
        font-size: 0.5rem;
    }

    .carousel-caption .carousel-tagline {
        font-size: 7px;
    }
}

@media (max-width: 576px) {
    .carousel-caption {
        margin-top: 20px;
    }

    .carousel-caption h1 {
        font-size: 1rem;
    }

    .carousel-caption p {
        font-size: 0.4rem;
    }

    .carousel-caption .carousel-tagline {
        font-size: 6px;
        padding: 1px 3px;
    }
}

/* Untuk resolusi 375px (misalnya ponsel kecil) */
@media (max-width: 375px) {
    .carousel-caption {
        margin-top: 15px; /* Mengurangi margin atas */
        padding: 5px; /* Mengurangi padding untuk layar lebih kecil */
    }

    .carousel-caption h1 {
        font-size: 1.0rem; /* Ukuran teks lebih kecil */
        margin-bottom: 10px; /* Menambahkan ruang bawah */
    }

    .carousel-caption p {
        font-size: 0.45rem; /* Ukuran deskripsi lebih kecil */
        margin-top: 5px; /* Memberikan ruang antara h1 dan p */
    }

    .carousel-caption .carousel-tagline {
        font-size: 6px;
        padding: 2px 3px;
    }
}

/* Untuk resolusi 320px (ponsel lebih kecil) */
@media (max-width: 320px) {
    .carousel-caption {
        margin-top: 10px; /* Menyesuaikan margin atas */
        padding: 3px; /* Padding lebih kecil */
    }

    .carousel-caption h1 {
        font-size: 0.8rem; /* Ukuran teks lebih kecil lagi */
        margin-bottom: 8px; /* Menambahkan ruang bawah */
    }

    .carousel-caption p {
        font-size: 0.4rem; /* Ukuran deskripsi lebih kecil */
        margin-top: 5px; /* Memberikan ruang antara h1 dan p */
    }

    .carousel-caption .carousel-tagline {
        font-size: 5px;
        padding: 1px 2px;
    }
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

/* Media Queries untuk Responsivitas */
@media (max-width: 1200px) {
    .article-header {
        width: 300px;
        font-size: 10px;
        height: 24px;
    }
}

@media (max-width: 992px) {
    .article-header {
        width: 280px;
        font-size: 11px;
        height: 22px;
    }
}

@media (max-width: 768px) {
    .article-header {
        width: 250px;
        font-size: 8px;
        height: 20px;
    }
}

@media (max-width: 576px) {
    .article-header {
        width: 200px;
        font-size: 6px;
        height: 18px;
        margin-top: 20px; /* Mengurangi jarak atas */
    }
}



/* Default styling untuk desktop */
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
    max-width: 1600px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
}

.contenttentang {
    background-color: #0d1b2a;
    color: #ffffff;
    border-radius: 20px;
    display: flex;
    flex-wrap: wrap;
    padding: 30px;
    max-width: 100%;
    width: 100%;
}

.image-section {
    flex: 1;
    padding-right: 30px;
}
.image-section img {
    width: 100%;
    border-radius: 20px;
}
.text-section {
    flex: 1;
    padding-left: 30px;
}
.text-section h2 {
    font-size: 18px;
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
    display: block;
    margin-top: 10px;
}

.read-more-link {
    color: #0F4872;
    font-family: 'League Spartan', sans-serif;
    font-size: 13px;
    font-weight: 500;
    border-left: 3px solid #0F4872;
    background-color: rgba(110, 172, 218, 0.20);
    width: fit-content;
    padding: 5px 15px;
    border-radius: 5px;
    text-decoration: none !important;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

/* Responsiveness */

/* Ukuran layar besar (2560px) */
@media (max-width: 2560px) {
    .contenttentang {
        padding: 50px;
    }
    .text-section h2 {
        font-size: 20px;
    }
    .text-section p {
        font-size: 18px;
    }
    .read-more-link {
        font-size: 15px;
        padding: 10px 20px;
    }
}

/* Ukuran layar sedang (1440px) */
@media (max-width: 1440px) {
    .contenttentang {
        padding: 40px;
    }
    .text-section h2 {
        font-size: 18px;
    }
    .text-section p {
        font-size: 16px;
    }
    .read-more-link {
        font-size: 13px;
        padding: 8px 18px;
    }
}

/* Tablet (1024px) */
@media (max-width: 1024px) {
    .contenttentang {
        flex-direction: column; /* Elemen berbaris vertikal */
        padding: 20px; /* Mengurangi padding untuk mengecilkan background */
        max-width: 800px; /* Membatasi lebar maksimal background */
        width: 90%; /* Menyesuaikan lebar agar tetap responsif */
        max-width: 850px; /* Menyesuaikan lebar container agar gambar tidak terlalu besar */
        align-items: center; /* Konten tetap di tengah */
    }

    .image-section {
        flex: none; /* Menonaktifkan flex agar ukuran lebih terkendali */
        width: 100%; /* Gambar tetap mengisi lebar penuh */
        max-width: 600px; /* Tetap membatasi lebar maksimum gambar */
        padding-right: 0; /* Menghapus padding kanan */
        margin-bottom: 20px; /* Memberikan jarak bawah */
    }

    .image-section img {
        width: 100%; /* Gambar tetap responsif */
        height: auto; /* Menjaga proporsi gambar */
        border-radius: 15px; /* Sudut gambar tetap estetis */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
    }

    .text-section {
        flex: none; /* Menonaktifkan flex agar teks lebih terkendali */
        width: 100%; /* Teks memenuhi lebar container */
        padding-left: 0; /* Menghapus padding kiri */
        text-align: center; /* Menengahkan semua teks dalam .text-section */
    }

    .text-section h2 {
        font-size: 18px; /* Ukuran font */
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .text-section p {
        font-size: 14px; /* Ukuran font lebih kecil */
        line-height: 1.5; /* Spasi antar baris */
        margin-bottom: 20px;
        margin: 0 auto; /* Menengahkan blok teks */
        text-align: center; /* Menengahkan teks di dalam paragraf */
        display: inline-block; /* Membuat elemen mengikuti konten agar mudah ditengah-kan */
    }

    .read-more-link {
        font-size: 12px; /* Ukuran font link */
        padding: 8px 15px; /* Padding link */
        margin-top: 10px;
        border-radius: 5px;
    }
}



/* Tablet kecil (768px) */
@media (max-width: 768px) {
    .containertentang {
        padding: 20px;
    }
    .contenttentang {
        padding: 20px;
    }
    .text-section h2 {
        font-size: 14px;
    }
    .text-section p {
        font-size: 13px;
    }
    .read-more-link {
        font-size: 11px;
        padding: 5px 12px;
    }
}

/* Ponsel besar (425px) */
@media (max-width: 425px) {
    .containertentang {
        margin-top: 0;
    }
    .contenttentang {
        padding: 15px;
    }
    .image-section img {
        border-radius: 10px; /* Border lebih kecil */
    }
    .text-section h2 {
        font-size: 12px;
    }
    .text-section p {
        font-size: 12px;
    }
    .read-more-link {
        font-size: 10px;
        padding: 4px 10px;
    }
}

/* Ponsel sedang (375px) */
@media (max-width: 375px) {
    .text-section h2 {
        font-size: 11px;
    }
    .text-section p {
        font-size: 11px;
    }
    .read-more-link {
        font-size: 9px;
        padding: 3px 8px;
    }
}

/* Ponsel kecil (320px) */
@media (max-width: 320px) {
    .text-section h2 {
        font-size: 10px;
    }
    .text-section p {
        font-size: 10px;
    }
    .read-more-link {
        font-size: 8px;
        padding: 2px 6px;
    }
}





/* Global Styles */
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
    margin-top: 30px;
    margin-bottom: -28px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 10;
}

.product-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: 20px 0;
    gap: 20px;
    background-color: #021526;
    padding: 10px;
}

.product-card {
    display: flex;
    align-items: center;
    padding: 15px;
    background-color: #041C32;
    position: relative;
    border-radius: 10px;
    border: 2px solid #E2E2B6; /* Border dengan warna #E2E2B6 */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
    width: 30%; /* Default width */
    max-width: 330px;
    margin: 10px;
    text-decoration: none;
    color: inherit;
}

.product-card:hover {
    background-color: #02161D;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
    transform: translateY(-5px);
    text-decoration: none;
    border-color: #000000; /* Ubah border menjadi hitam saat hover */
}

.product-card img {
    border-radius: 5px;
    max-width: 150px;
    max-height: 120px;
    object-fit: contain;
    margin-right: 15px;
}

.product-info {
    flex: 1;
    color: #E2E2B6;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.product-info h2 {
    font-family: 'League Spartan', sans-serif;
    font-size: 22px;
    color: #E2E2B6;
    margin: 0;
    text-align: right;
}

.price {
    font-family: 'Arial', sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: #E50914;
    margin-top: 10px;
    text-align: right;
}

/* Responsive Styles */

/* 2560px */
@media (min-width: 2560px) {
    .product-card {
        width: 20%; /* Menampilkan lebih banyak produk dalam satu baris */
    }
}

/* 1440px */
@media (max-width: 1440px) {
    .product-card {
        width: 25%; /* Menampilkan 4 produk dalam satu baris */
    }

    .product-card img {
        max-width: 140px;
        max-height: 110px;
    }

    .product-info h2 {
        font-size: 20px;
    }

    .price {
        font-size: 16px;
    }
}

/* 1024px */
@media (max-width: 1024px) {
    .product-card {
        width: 33%; /* Menampilkan 3 produk dalam satu baris */
    }

    .product-card img {
        max-width: 120px;
        max-height: 100px;
    }

    .product-info h2 {
        font-size: 18px;
    }

    .price {
        font-size: 15px;
    }
}

/* 768px */
@media (max-width: 768px) {
    .product-card {
        width: 45%; /* Menampilkan 2 produk dalam satu baris */
    }

    .product-card img {
        max-width: 100px;
        max-height: 90px;
    }

    .product-info h2 {
        font-size: 16px;
    }

    .price {
        font-size: 14px;
    }
}

/* 425px */
@media (max-width: 425px) {
    .product-card {
        width: 90%; /* Menampilkan 1 produk dalam satu baris */
    }

    .product-card img {
        max-width: 80px;
        max-height: 70px;
    }

    .product-info h2 {
        font-size: 14px;
    }

    .price {
        font-size: 13px;
    }
}

/* 375px */
@media (max-width: 375px) {
    .product-card {
        width: 80%;
        padding: 8px;
    }

    .product-card img {
        max-width: 70px;
        max-height: 60px;
    }

    .product-info h2 {
        font-size: 12px;
    }

    .price {
        font-size: 12px;
    }
}

/* 320px */
@media (max-width: 320px) {
    .product-card {
        flex-direction: column;
        align-items: center;
        padding: 8px;
        text-align: center;
    }

    .product-card img {
        margin-right: 0;
        margin-bottom: 10px;
        max-width: 60px;
        max-height: 50px;
    }

    .product-info {
        align-items: center;
    }

    .product-info h2 {
        font-size: 11px;
    }

    .price {
        font-size: 10px;
    }
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

/* Global Styles */
.container {
    display: flex;
    justify-content: center;
    align-items: stretch;
    flex-wrap: wrap; /* Menambahkan responsivitas */
    width: 100%;
    max-width: 10000px;
    margin: 100px auto 20px;
    background-color: #0a1a2a;
    padding: 20px;
    gap: 20px;
}

.card {
    position: relative;
    flex: 1 1 30%; /* Default untuk desktop, 3 kartu per baris */
    max-width: 330px;
    min-width: 250px;
    height: 300px;
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease, filter 0.3s ease;
    background-color: #041C32;
    border: 2px solid #E2E2B6;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 15px;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: rotate(2deg);
    filter: brightness(1.1);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
}

.card:hover img {
    transform: scale(1.05);
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
    font-size: 1.2em;
    text-align: center;
    margin: 0;
}

.card .overlay p {
    font-family: 'Lexend Exa', sans-serif;
    color: #E2E2B6;
    font-size: 0.9em;
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

/* Responsive Styles */

/* 2560px */
@media (min-width: 2560px) {
    .card {
        flex: 1 1 20%; /* Menampilkan lebih banyak kartu per baris */
    }
}

/* 1440px */
@media (max-width: 1440px) {
    .card {
        flex: 1 1 25%; /* 4 kartu per baris */
    }
}

/* 1024px */
@media (max-width: 1024px) {
    .card {
        flex: 1 1 33%; /* 3 kartu per baris */
    }
}

/* 768px */
@media (max-width: 768px) {
    .card {
        flex: 1 1 45%; /* 2 kartu per baris */
    }
}

/* 425px */
@media (max-width: 425px) {
    .card {
        flex: 1 1 90%; /* 1 kartu per baris */
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
    </style>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="/upload/<?=$tentang->img_navbar ?>" alt="Logo" width="161" height="97" class="d-inline-block align-text-top">
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
            <img src="/upload/<?=$tentang->img_banner ?>" alt="Slide 1" class="carousel-image">
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
                <p><a href="<?= base_url('/aktivitas/' . $item->slug); ?>">Baca Selengkapnya</a></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<!-- Footer -->
<div class="footer">
    <img src="<?= base_url('upload/' . $tentang->img_footer); ?>" alt="Logo" class="footer-logo">
    <span class="footer-separator">|</span>
    <p>Copyright ©2024. Design by Bayu Valent</p>
</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
