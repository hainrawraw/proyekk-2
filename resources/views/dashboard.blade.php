
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Judul halaman -->
    <title>Dashboard | Rich Gallery</title>

    <style>
        /* Warna utama website Rich Gallery */
        :root {
            --pink: #c66f8b;
            --pink-tua: #9d5069;
            --pink-muda: #fff0f4;
            --putih: #ffffff;
            --teks: #593640;
            --abu: #8c777e;
        }

        /* Pengaturan dasar seluruh halaman */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #fff9fb;
            color: var(--teks);
        }

        /* Membagi halaman menjadi sidebar dan konten */
        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar sebelah kiri */
        .sidebar {
            width: 230px;
            background: #754858;
            color: white;
            padding: 25px 16px;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
        }

        /* Logo dan nama toko */
        .brand {
            font-family: Georgia, serif;
            font-size: 23px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 35px;
        }

        .brand small {
            display: block;
            font-family: Arial, sans-serif;
            font-size: 11px;
            font-weight: normal;
            margin-top: 7px;
            color: #f8dfe7;
        }

        /* Menu navigasi sidebar */
        .menu a {
            display: block;
            padding: 13px 14px;
            margin-bottom: 8px;
            border-radius: 8px;
            color: #fff1f5;
            text-decoration: none;
            font-size: 14px;
        }

        /* Menandai menu dashboard yang aktif */
        .menu a.active,
        .menu a:hover {
            background: #c77d96;
            color: white;
        }

        /* Menu logout diletakkan di bawah */
        .logout {
            margin-top: auto;
            padding: 13px 14px;
            color: #fff1f5;
            text-decoration: none;
            font-size: 14px;
        }

        /* Bagian konten kanan */
        .main-content {
            flex: 1;
            min-width: 0;
            padding: 28px 35px;
        }

        /* Header dashboard */
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .topbar h2 {
            font-size: 23px;
        }

        .profile {
            font-size: 13px;
            color: var(--abu);
        }

        /* Banner utama */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 25px;
            min-height: 270px;
            padding: 30px;
            background: linear-gradient(120deg, #fce4eb, #f5cbd8);
            border-radius: 16px;
            overflow: hidden;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-family: Georgia, serif;
            font-size: 31px;
            line-height: 1.3;
            margin-bottom: 14px;
        }

        .hero-text p {
            color: #795460;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 22px;
        }

        /* Tombol menuju katalog */
        .button {
            display: inline-block;
            background: var(--pink-tua);
            color: white;
            padding: 12px 20px;
            border-radius: 7px;
            text-decoration: none;
            font-size: 13px;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background: #7d3c52;
        }

        /* Foto buket di banner */
        .hero-image {
            width: 42%;
            max-width: 350px;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
        }

        /* Bagian menu di bawah banner */
        .section-title {
            margin-top: 32px;
            margin-bottom: 8px;
            font-family: Georgia, serif;
            font-size: 23px;
        }

        .section-description {
            color: var(--abu);
            font-size: 14px;
            line-height: 1.7;
        }

        /* Kartu pintasan menu */
        .menu-cards {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
            margin-top: 20px;
        }

        .card {
            background: white;
            border: 1px solid #f0dce3;
            padding: 22px;
            border-radius: 12px;
        }

        .card h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .card p {
            color: var(--abu);
            font-size: 13px;
            line-height: 1.7;
            margin-bottom: 17px;
        }

        /* Menyesuaikan layout untuk layar kecil */
        @media (max-width: 760px) {
            .sidebar {
                width: 155px;
                padding: 18px 9px;
            }

            .brand {
                font-size: 18px;
            }

            .main-content {
                padding: 20px 15px;
            }

            .hero {
                flex-direction: column;
                align-items: flex-start;
            }

            .hero-image {
                width: 100%;
                max-width: none;
            }

            .hero-text h1 {
                font-size: 25px;
            }

            .menu-cards {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
            }

            .brand {
                margin-bottom: 15px;
            }

            .menu {
                display: flex;
                flex-wrap: wrap;
                gap: 5px;
            }

            .menu a {
                margin: 0;
                padding: 10px;
            }

            .logout {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- SIDEBAR: navigasi utama pelanggan -->
    <aside class="sidebar">

        <div class="brand">
            Rich Gallery
            <small>Buket Bunga untuk Momen Spesial</small>
        </div>

        <nav class="menu">
            <!-- Menu yang sedang dibuka -->
            <a href="/dashboard" class="active">⌂ &nbsp; Dashboard</a>

            <!-- Menu katalog produk -->
            <a href="/katalog">▧ &nbsp; Katalog Buket</a>

            <!-- Menu riwayat dan status pesanan -->
            <a href="/status-pesanan">▤ &nbsp; Pesanan Saya</a>

            <!-- Menu profil pelanggan -->
            <a href="/akun">♙ &nbsp; Akun</a>
        </nav>

        <!-- Tombol keluar; belum dihubungkan ke autentikasi -->
        <a href="/" class="logout">⇥ &nbsp; Logout</a>

    </aside>

    <!-- KONTEN UTAMA: bagian kanan dashboard -->
    <main class="main-content">

        <!-- Header dan informasi pelanggan -->
        <header class="topbar">
            <h2>Dashboard</h2>
            <div class="profile">Pelanggan Rich Gallery</div>
        </header>

        <!-- BANNER UTAMA: teks dan foto buket -->
        <section class="hero">

            <div class="hero-text">
                <h1>Buket Indah<br>Untuk Momen Spesialmu</h1>

                <p>
                    Jadikan setiap momen lebih berkesan
                    dengan buket bunga pilihan terbaik dari
                    Rich Gallery.
                </p>

                <!-- Mengarahkan pelanggan ke katalog -->
                <a href="/katalog" class="button">
                    Lihat Katalog
                </a>
            </div>

            <!-- Foto diambil dari folder public/images -->
            <img
                src="{{ asset('images/bouquet-login.jpg') }}"
                alt="Buket bunga Rich Gallery"
                class="hero-image"
            >

        </section>

        <!-- Bagian pintasan menu pelanggan -->
        <section>
            <h2 class="section-title">Jelajahi Rich Gallery</h2>

            <p class="section-description">
                Temukan buket favoritmu dan pantau pesanan
                dalam satu tempat.
            </p>

            <div class="menu-cards">

                <!-- Kartu menuju katalog -->
                <div class="card">
                    <h3>Katalog Buket</h3>
                    <p>
                        Lihat koleksi buket bunga beserta
                        foto, deskripsi, dan harga.
                    </p>
                    <a href="/katalog" class="button">
                        Lihat Produk
                    </a>
                </div>

                <!-- Kartu menuju status pesanan -->
                <div class="card">
                    <h3>Pesanan Saya</h3>
                    <p>
                        Pantau status pesanan mulai dari
                        konfirmasi hingga selesai.
                    </p>
                    <a href="/status-pesanan" class="button">
                        Lihat Pesanan
                    </a>
                </div>

            </div>
        </section>

    </main>
</div>

</body>
</html>