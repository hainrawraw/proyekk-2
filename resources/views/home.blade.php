<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rich Gallery | Buket Cantik untuk Momen Spesial</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
          rel="stylesheet">

    <style>
        /* =========================
           1. PENGATURAN DASAR
        ========================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: #fffafa;
            color: #62434f;
            line-height: 1.7;
        }

        :root {
            --pink: #e8b6c5;
            --pink-light: #fff0f4;
            --pink-soft: #f9e1e8;
            --brown: #62434f;
            --cream: #fffafa;
            --white: #ffffff;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button,
        a {
            -webkit-tap-highlight-color: transparent;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
        }

        .section {
            padding: 85px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 12px;
            font-family: 'Playfair Display', serif;
            font-size: clamp(28px, 4vw, 38px);
            color: var(--brown);
        }

        .section-description {
            max-width: 620px;
            margin: 0 auto 40px;
            text-align: center;
            color: #8b737c;
            font-size: 14px;
        }

        .eyebrow {
            display: inline-block;
            color: #b26f86;
            background: #fce9ef;
            padding: 7px 15px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 18px;
        }

        .btn {
            display: inline-block;
            border: 1px solid var(--brown);
            background: var(--brown);
            color: white;
            padding: 13px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.3s;
            cursor: pointer;
        }

        .btn:hover {
            background: #805966;
            border-color: #805966;
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--brown);
        }

        .btn-outline:hover {
            color: white;
        }


        /* =========================
           2. NAVBAR
        ========================= */

        .navbar {
            background: rgba(255, 250, 250, 0.97);
            border-bottom: 1px solid #f3e3e8;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-content {
            min-height: 82px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-shrink: 0;
        }

        .logo img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .logo-text {
            font-family: 'Playfair Display', serif;
            font-size: 23px;
            font-weight: 700;
            color: var(--brown);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 27px;
            list-style: none;
        }

        .nav-menu a {
            font-size: 13px;
            font-weight: 600;
            transition: 0.2s;
        }

        .nav-menu a:hover,
        .nav-menu a.active {
            color: #c17c94;
        }

        .nav-cta {
            background: var(--pink-soft);
            padding: 10px 16px;
            border-radius: 8px;
            color: var(--brown);
        }

        .nav-toggle {
            display: none;
            border: 0;
            background: transparent;
            color: var(--brown);
            font-size: 28px;
            cursor: pointer;
        }


        /* =========================
           3. HERO / HOMEPAGE UTAMA
        ========================= */

        .hero {
            padding: 65px 0 75px;
            background:
                radial-gradient(circle at 10% 10%, #fff0f4, transparent 35%),
                linear-gradient(120deg, #fffafa, #fff2f5);
            overflow: hidden;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            align-items: center;
            gap: 55px;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(37px, 5vw, 58px);
            line-height: 1.2;
            color: var(--brown);
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #c67f98;
        }

        .hero-text {
            max-width: 510px;
            color: #866e78;
            font-size: 15px;
            margin-bottom: 28px;
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }

        .hero-note {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
            font-size: 12px;
            color: #947d86;
        }

        .hero-note::before {
            content: "";
            width: 35px;
            height: 1px;
            background: #c67f98;
        }

        /* Tempat foto utama yang nanti diganti foto milikmu */

        .hero-image {
            min-height: 430px;
            background: linear-gradient(145deg, #f7dce5, #fcecf0);
            border-radius: 180px 180px 22px 22px;
            border: 8px solid white;
            box-shadow: 0 15px 45px rgba(117, 67, 84, 0.10);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 25px;
        }

        .image-placeholder {
            max-width: 260px;
            color: #a06c7f;
        }

        .image-placeholder strong {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 25px;
            margin-bottom: 8px;
        }

        .image-placeholder p {
            font-size: 13px;
        }

        .floating-note {
            position: absolute;
            bottom: 25px;
            left: -25px;
            background: white;
            border-radius: 12px;
            padding: 15px 20px;
            box-shadow: 0 8px 30px rgba(117, 67, 84, 0.12);
            font-size: 12px;
        }

        .floating-note strong {
            display: block;
            font-size: 14px;
            color: var(--brown);
        }


        /* =========================
           4. KEUNGGULAN TOKO
        ========================= */

        .benefits {
            background: white;
            border-top: 1px solid #f5e7eb;
            border-bottom: 1px solid #f5e7eb;
        }

        .benefit-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            padding: 28px 0;
        }

        .benefit-item {
            text-align: center;
            padding: 12px;
        }

        .benefit-item h3 {
            font-size: 15px;
            margin-bottom: 5px;
        }

        .benefit-item p {
            font-size: 12px;
            color: #947d86;
        }


        /* =========================
           5. KATEGORI PILIHAN
        ========================= */

/* Judul dan tombol kategori */

.category-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
}

.category-heading .section-title {
    text-align: left;
    margin-bottom: 8px;
}

.category-heading .section-description {
    text-align: left;
    margin: 0;
}

.category-heading .eyebrow {
    margin-bottom: 10px;
}

/* Susunan kartu kategori */

.category-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 22px;
}

/* Kartu kategori */

.category-card {
    display: block;
    background: white;
    border: 1px solid #f2dfe6;
    border-radius: 16px;
    padding: 11px;
    box-shadow: 0 5px 18px rgba(117, 67, 84, 0.05);
    transition: transform 0.3s, box-shadow 0.3s;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 28px rgba(117, 67, 84, 0.12);
}

/* Tempat foto kategori */

.category-image {
    height: 175px;
    background: linear-gradient(145deg, #f9e1e8, #fff4f7);
    border-radius: 11px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 15px;
    color: #a06c7f;
    font-size: 12px;
    overflow: hidden;
}

/* Informasi kategori */

.category-info {
    padding: 15px 7px 10px;
}

.category-info h3 {
    font-family: 'Playfair Display', serif;
    font-size: 18px;
    color: #62434f;
    margin-bottom: 6px;
}

.category-info p {
    color: #947d86;
    font-size: 12px;
    margin-bottom: 12px;
}

.category-link {
    display: inline-block;
    color: #b26f86;
    font-size: 12px;
    font-weight: 700;
}

/* Tampilan tablet */

@media (max-width: 900px) {
    .category-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .category-heading {
        align-items: flex-start;
    }
}

/* Tampilan HP */

@media (max-width: 700px) {
    .category-heading {
        flex-direction: column;
        align-items: stretch;
    }

    .category-heading .btn {
        align-self: flex-start;
    }

    .category-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
    }

    .category-image {
        height: 130px;
    }

    .category-info h3 {
        font-size: 15px;
    }

    .category-info p {
        font-size: 11px;
    }
}


        /* =========================
           6. PRODUK UNGGULAN
        ========================= */

        .featured {
            background: #fff0f4;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .product-card {
            background: white;
            padding: 12px;
            border-radius: 15px;
            border: 1px solid #f1dfe6;
        }

        .product-image {
            min-height: 220px;
            border-radius: 10px;
            background: linear-gradient(145deg, #f9e1e8, #fff5f7);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
            color: #a06c7f;
            font-size: 13px;
        }

        .product-info {
            padding: 17px 8px 10px;
        }

        .product-info h3 {
            font-family: 'Playfair Display', serif;
            font-size: 19px;
            margin-bottom: 7px;
        }

        .product-info p {
            font-size: 12px;
            color: #947d86;
            margin-bottom: 13px;
        }


        /* =========================
           7. CUSTOM BOUQUET
        ========================= */

        .custom-section {
            padding: 75px 0;
        }

        .custom-box {
            background: linear-gradient(120deg, #f8dce5, #fff0f4);
            border-radius: 22px;
            padding: 55px 30px;
            text-align: center;
            border: 1px solid #f1d5df;
        }

        .custom-box h2 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(28px, 4vw, 38px);
            margin-bottom: 15px;
        }

        .custom-box p {
            max-width: 620px;
            margin: 0 auto 25px;
            color: #866e78;
            font-size: 14px;
        }


        /* =========================
           8. TENTANG KAMI
        ========================= */

        .about {
            background: white;
        }

        .about-content {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            align-items: center;
            gap: 55px;
        }

        .about-image {
            min-height: 330px;
            background: linear-gradient(145deg, #f9dfe7, #fff2f5);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 25px;
            color: #a06c7f;
            font-size: 13px;
        }

        .about-text h2 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(29px, 4vw, 38px);
            line-height: 1.3;
            margin-bottom: 20px;
        }

        .about-text p {
            color: #866e78;
            font-size: 14px;
            margin-bottom: 15px;
        }


        /* =========================
           9. KONTAK DAN FOOTER
        ========================= */

        .contact {
            background: #fff0f4;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .contact-card {
            background: white;
            border: 1px solid #f1dfe6;
            border-radius: 15px;
            padding: 25px 20px;
            text-align: center;
        }

        .contact-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 21px;
            margin-bottom: 10px;
        }

        .contact-card p {
            font-size: 13px;
            color: #866e78;
            overflow-wrap: anywhere;
        }

        .contact-card a {
            color: #b26f86;
            font-weight: 700;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        .footer {
            background: #62434f;
            color: white;
            padding: 40px 0 20px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 25px;
            flex-wrap: wrap;
            padding-bottom: 25px;
        }

        .footer .logo-text {
            color: white;
        }

        .footer p {
            font-size: 12px;
            color: #f2dce4;
        }

        .footer-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            font-size: 12px;
        }

        .footer-links a:hover {
            color: #f6c9d8;
        }

        .copyright {
            text-align: center;
            border-top: 1px solid #866774;
            padding-top: 20px;
            font-size: 11px !important;
        }


        /* =========================
           10. TAMPILAN HP DAN TABLET
        ========================= */

        @media (max-width: 900px) {
            .nav-menu {
                gap: 15px;
            }

            .hero-content {
                gap: 30px;
            }

            .hero-image {
                min-height: 350px;
            }

            .category-grid,
            .product-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .about-content {
                gap: 30px;
            }
        }

        @media (max-width: 700px) {
            .nav-content {
                min-height: 72px;
                flex-wrap: wrap;
                padding: 10px 0;
            }

            .logo img {
                width: 40px;
                height: 40px;
            }

            .logo-text {
                font-size: 20px;
            }

            .nav-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
                width: 100%;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                padding: 5px 0 12px;
            }

            .nav-menu.show {
                display: flex;
            }

            .nav-menu li a {
                display: block;
                padding: 12px 5px;
            }

            .nav-cta {
                display: inline-block !important;
                text-align: center;
            }

            .hero {
                padding: 45px 0 55px;
            }

            .hero-content {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .hero h1 {
                font-size: 39px;
            }

            .hero-image {
                min-height: 320px;
                margin: 0 10px;
            }

            .floating-note {
                left: -8px;
            }

            .benefit-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .benefit-item {
                padding: 10px;
            }

            .section {
                padding: 60px 0;
            }

            .category-grid,
            .product-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .category-image {
                min-height: 240px;
            }

            .product-image {
                min-height: 250px;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .about-image {
                min-height: 250px;
            }

            .custom-box {
                padding: 40px 22px;
            }

            .footer-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .footer-links {
                gap: 15px;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->

    <header class="navbar">
        <div class="container nav-content">

            <a href="#beranda" class="logo">
                <!-- Nanti simpan logo di public/images/logo.png -->
                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="Logo Rich Gallery"
                    onerror="this.style.display='none'"
                >

                <span class="logo-text">Rich Gallery</span>
            </a>

            <button
                class="nav-toggle"
                id="navToggle"
                type="button"
                aria-label="Buka menu navigasi"
                aria-expanded="false"
            >
                ☰
            </button>

            <ul class="nav-menu" id="navMenu">
                <li><a href="#beranda" class="active">Beranda</a></li>
                <li><a href="{{ url('/kategori') }}">Katalog</a></li>
                <li><a href="#tentang">Tentang Kami</a></li>
                <li><a href="#kontak">Kontak</a></li>
                <li><a href="#custom" class="nav-cta">Custom Buket</a></li>
            </ul>

        </div>
    </header>


    <!-- =========================
         HERO / BERANDA
    ========================== -->

    <section class="hero" id="beranda">
        <div class="container hero-content">

            <div class="hero-text-content">

                <span class="eyebrow">BLOOM WITH LOVE</span>

                <h1>
                    Hadiah Kecil,<br>
                    <span>Makna Besar.</span>
                </h1>

                <p class="hero-text">
                    Temukan buket cantik untuk menemani setiap momen spesialmu.
                    Dibuat dengan penuh perhatian agar setiap hadiah memiliki
                    cerita dan makna tersendiri.
                </p>

                <div class="hero-buttons">
                    <a href="{{ url('/kategori') }}" class="btn">
                        Lihat Katalog
                    </a>

                    <a href="#tentang" class="btn btn-outline">
                        Tentang Kami
                    </a>
                </div>

                <div class="hero-note">
                    Buket spesial untuk momen yang tak terlupakan.
                </div>

            </div>


            <!-- Tempat foto utama.
                 Nanti bagian ini bisa diganti dengan foto toko atau buket. -->

            <div class="hero-image">

                <div class="image-placeholder">
                    <strong>Foto Pilihanmu</strong>
                    <p>
                        Tempat untuk foto utama Rich Gallery.
                        Nanti kamu bisa memasukkan gambar milikmu sendiri.
                    </p>
                </div>

                <div class="floating-note">
                    <strong>Made with Love</strong>
                    Hadiah penuh cerita.
                </div>

            </div>

        </div>
    </section>


    <!-- =========================
         KEUNGGULAN
    ========================== -->

    <section class="benefits">
        <div class="container benefit-grid">

            <div class="benefit-item">
                <h3>Buket Penuh Makna</h3>
                <p>Cocok untuk berbagai momen spesial.</p>
            </div>

            <div class="benefit-item">
                <h3>Bisa Custom</h3>
                <p>Sesuaikan buket dengan keinginanmu.</p>
            </div>

            <div class="benefit-item">
                <h3>Pemesanan Mudah</h3>
                <p>Hubungi kami untuk informasi pesanan.</p>
            </div>

        </div>
    </section>


    <!-- =========================
         KATEGORI PILIHAN
    ========================== -->


<!-- =========================
     KATEGORI PILIHAN
========================== -->

<section class="section" id="kategori">
    <div class="container">

        <div class="category-heading">
            <div>
                <span class="eyebrow">TEMUKAN FAVORITMU</span>
                <h2 class="section-title">Kategori Pilihan</h2>
                <p class="section-description">
                    Temukan buket yang sesuai untuk setiap momen spesialmu.
                </p>
            </div>

            <a href="{{ url('/produk') }}" class="btn btn-outline">
                Lihat Semua Kategori &rarr;
            </a>
        </div>

        <div class="category-grid">

            <!-- Kategori 1 -->
            <a href="{{ url('/produk') }}" class="category-card">
                <div class="category-image">
                    <span>Foto Fresh Flower</span>
                </div>
                <div class="category-info">
                    <h3>Fresh Flower</h3>
                    <p>Buket bunga segar untuk momen istimewa.</p>
                    <span class="category-link">Lihat Kategori &rarr;</span>
                </div>
            </a>

            <!-- Kategori 2 -->
            <a href="{{ url('/produk') }}" class="category-card">
                <div class="category-image">
                    <span>Foto Artificial Flower</span>
                </div>
                <div class="category-info">
                    <h3>Artificial Flower</h3>
                    <p>Buket bunga cantik yang tahan lama.</p>
                    <span class="category-link">Lihat Kategori &rarr;</span>
                </div>
            </a>

            <!-- Kategori 3 -->
            <a href="{{ url('/produk') }}" class="category-card">
                <div class="category-image">
                    <span>Foto Hot Air Balon</span>
                </div>
                <div class="category-info">
                    <h3>Hot Air Balon</h3>
                    <p>Hadiah unik dengan tampilan istimewa.</p>
                    <span class="category-link">Lihat Kategori &rarr;</span>
                </div>
            </a>

            <!-- Kategori 4 -->
            <a href="{{ url('/produk') }}" class="category-card">
                <div class="category-image">
                    <span>Foto Sun Flower</span>
                </div>
                <div class="category-info">
                    <h3>Sun Flower</h3>
                    <p>Buket bunga matahari yang ceria.</p>
                    <span class="category-link">Lihat Kategori &rarr;</span>
                </div>
            </a>

            <!-- Kategori 5 -->
            <a href="{{ url('/produk') }}" class="category-card">
                <div class="category-image">
                    <span>Foto Bouquet Graduation</span>
                </div>
                <div class="category-info">
                    <h3>Bouquet Graduation</h3>
                    <p>Teman spesial untuk merayakan kelulusan.</p>
                    <span class="category-link">Lihat Kategori &rarr;</span>
                </div>
            </a>

            <!-- Kategori 6 -->
            <a href="{{ url('/produk') }}" class="category-card">
                <div class="category-image">
                    <span>Foto Money Bouquet</span>
                </div>
                <div class="category-info">
                    <h3>Money Bouquet</h3>
                    <p>Alternatif hadiah yang kreatif dan berkesan.</p>
                    <span class="category-link">Lihat Kategori &rarr;</span>
                </div>
            </a>

            <!-- Kategori 7 -->
            <a href="{{ url('/produk') }}" class="category-card">
                <div class="category-image">
                    <span>Foto Bouquet Snack</span>
                </div>
                <div class="category-info">
                    <h3>Bouquet Snack</h3>
                    <p>Perpaduan camilan untuk hadiah favorit.</p>
                    <span class="category-link">Lihat Kategori &rarr;</span>
                </div>
            </a>

        </div>

    </div>
</section>
    <!-- =========================
         PRODUK UNGGULAN
    ========================== -->

    <section class="section featured" id="unggulan">
        <div class="container">

            <h2 class="section-title">Pilihan untuk Momen Spesial</h2>

            <p class="section-description">
                Temukan inspirasi hadiah yang bisa kamu pilih
                untuk orang-orang tersayang.
            </p>

            <div class="product-grid">

                <article class="product-card">

                    <div class="product-image">
                        <p>Tempat Foto Produk 1</p>
                    </div>

                    <div class="product-info">
                        <h3>Buket Wisuda</h3>

                        <p>
                            Hadiah manis untuk merayakan kelulusan.
                        </p>

                        <a href="{{ url('/produk') }}" class="category-link">
                            Jelajahi Katalog &rarr;
                        </a>
                    </div>

                </article>


                <article class="product-card">

                    <div class="product-image">
                        <p>Tempat Foto Produk 2</p>
                    </div>

                    <div class="product-info">
                        <h3>Buket Bunga</h3>

                        <p>
                            Pilihan buket untuk menyampaikan perasaan.
                        </p>

                        <a href="{{ url('/produk') }}" class="category-link">
                            Jelajahi Katalog &rarr;
                        </a>
                    </div>

                </article>


                <article class="product-card">

                    <div class="product-image">
                        <p>Tempat Foto Produk 3</p>
                    </div>

                    <div class="product-info">
                        <h3>Buket Custom</h3>

                        <p>
                            Inspirasi buket sesuai keinginanmu.
                        </p>

                        <a href="#custom" class="category-link">
                            Buat Buket Custom &rarr;
                        </a>
                    </div>

                </article>

            </div>

        </div>
    </section>


    <!-- =========================
         CUSTOMISASI
    ========================== -->

    <section class="custom-section" id="custom">
        <div class="container">

            <div class="custom-box">

                <span class="eyebrow">YOUR IDEA, YOUR BOUQUET</span>

                <h2>Buket Impianmu, Pilihanmu</h2>

                <p>
                    Punya ide buket sendiri? Ceritakan keinginanmu kepada
                    Rich Gallery dan diskusikan desain, warna, serta
                    detail buket yang kamu inginkan.
                </p>

                <!-- Ganti nomor di bawah dengan nomor WhatsApp toko.
                     Gunakan kode negara 62 tanpa tanda + atau angka 0 di depan. -->

                <a
                    href="https://wa.me/62GANTIDENGANNOMOR"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn"
                >
                    Konsultasi Custom via WhatsApp
                </a>

            </div>

        </div>
    </section>


    <!-- =========================
         TENTANG KAMI
    ========================== -->

    <section class="section about" id="tentang">
        <div class="container about-content">

            <!-- Tempat foto toko atau kegiatan merangkai buket -->

            <div class="about-image">
                <p>Tempat Foto Toko Rich Gallery</p>
            </div>


            <div class="about-text">

                <span class="eyebrow">ABOUT RICH GALLERY</span>

                <h2>Setiap Buket Punya Ceritanya Sendiri</h2>

                <p>
                    Rich Gallery merupakan toko buket yang menyediakan
                    berbagai pilihan hadiah untuk menemani momen spesialmu.
                </p>

                <p>
                    Kami ingin membantu kamu menyampaikan perhatian dan
                    perasaan melalui buket yang sesuai dengan kebutuhan
                    dan keinginanmu.
                </p>

                <p>
                    Kamu juga bisa menghubungi kami untuk mendiskusikan
                    pesanan custom sesuai konsep yang kamu inginkan.
                </p>

                <a href="#kontak" class="btn">
                    Hubungi Kami
                </a>

            </div>

        </div>
    </section>


    <!-- =========================
         KONTAK
    ========================== -->

    <section class="section contact" id="kontak">
        <div class="container">

            <h2 class="section-title">Hubungi Rich Gallery</h2>

            <p class="section-description">
                Ada pertanyaan atau ingin memesan buket?
                Hubungi kami melalui informasi berikut.
            </p>

            <div class="contact-grid">

                <!-- Ganti alamat sesuai alamat toko -->

                <div class="contact-card">
                    <h3>Alamat Toko</h3>

                    <p>
                        Masukkan alamat lengkap toko Rich Gallery di sini.
                    </p>
                </div>


                <!-- Ganti nomor WhatsApp toko -->

                <div class="contact-card">
                    <h3>WhatsApp</h3>

                    <p>
                        <a
                            href="https://wa.me/62GANTIDENGANNOMOR"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Hubungi via WhatsApp
                        </a>
                    </p>
                </div>


                <!-- Ganti username Instagram toko -->

                <div class="contact-card">
                    <h3>Instagram</h3>

                    <p>
                        <a
                            href="https://www.instagram.com/GANTI_USERNAME/"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            @GANTI_USERNAME
                        </a>
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer class="footer">
        <div class="container">

            <div class="footer-content">

                <a href="#beranda" class="logo">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Logo Rich Gallery"
                        onerror="this.style.display='none'"
                    >

                    <span class="logo-text">Rich Gallery</span>
                </a>

                <div class="footer-links">
                    <a href="#beranda">Beranda</a>
                    <a href="{{ url('/produk') }}">Katalog</a>
                    <a href="#tentang">Tentang Kami</a>
                    <a href="#kontak">Kontak</a>
                </div>

            </div>

            <p class="copyright">
                &copy; {{ date('Y') }} Rich Gallery.
                Semua hak dilindungi.
            </p>

        </div>
    </footer>


    <!-- =========================
         JAVASCRIPT MENU HP
    ========================== -->

    <script>
        const navToggle = document.getElementById('navToggle');
        const navMenu = document.getElementById('navMenu');

        navToggle.addEventListener('click', function () {
            navMenu.classList.toggle('show');

            const menuTerbuka = navMenu.classList.contains('show');

            navToggle.setAttribute('aria-expanded', menuTerbuka);
            navToggle.textContent = menuTerbuka ? '×' : '☰';
        });

        // Tutup menu setelah pelanggan memilih navigasi.
        document.querySelectorAll('#navMenu a').forEach(function (link) {
            link.addEventListener('click', function () {
                navMenu.classList.remove('show');
                navToggle.setAttribute('aria-expanded', 'false');
                navToggle.textContent = '☰';
            });
        });
    </script>

</body>
</html> 