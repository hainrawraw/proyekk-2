
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Katalog Buket - Rich Gallery</title>

    <style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(180deg, #fff9fa 0%, #fff1f3 100%);
    color: #603d4a;
}

.category {
    display: inline-block;
    background: #f9dfe5;
    color: #a85f76;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    margin-bottom: 10px;
    font-weight: bold;
}

.navbar {
    background: rgba(255, 255, 255, 0.96);
    padding: 16px 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 3px 15px rgba(150, 90, 110, 0.10);
    border-bottom: 1px solid #f4dce3;
}

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--pink-dark);
            font-size: 26px;
            font-weight: bold;
            }

        .logo img {
            width: 55px;
            height: 55px;
            object-fit: contain;
        }   

.back {
    text-decoration: none;
    color: #8e5268;
    font-weight: bold;
}

.container {
    padding: 30px 24px 70px;
    max-width: 1120px;
    margin: auto;
}

.title {
    text-align: center;
    padding: 35px 15px;
    margin-bottom: 28px;
    border-radius: 20px;
    background: linear-gradient(135deg, #f9dfe5, #fff0f2, #f6d6df);
    border: 1px solid #f2d0da;
    box-shadow: 0 5px 18px rgba(180, 105, 130, 0.08);
}

.title h1 {
    font-family: Georgia, serif;
    font-size: 38px;
    color: #794457;
    margin-bottom: 10px;
}

.title p {
    color: #896271;
    font-size: 16px;
}

.products {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
    max-width: 900px;
    margin: auto;
}

.card {
    background: rgba(255, 255, 255, 0.9);
    border: 1px solid #f5e1e6;
    border-radius: 17px;
    overflow: hidden;
    box-shadow: 0 5px 18px rgba(150, 90, 110, 0.09);
    transition: transform 0.2s, box-shadow 0.2s;
}

.card:hover {
    transform: translateY(-4px);
    box-shadow: 0 9px 23px rgba(150, 90, 110, 0.15);
}

.photo {
    height: 190px;
    margin: 10px 10px 0;
    border-radius: 12px;
    background: linear-gradient(135deg, #f8e5e9, #f0d8df);
    display: flex;
    justify-content: center;
    align-items: center;
    color: #9c7180;
    overflow: hidden;
}

.photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-content {
    padding: 15px;
}

.card h3 {
    margin-bottom: 8px;
    font-size: 17px;
    color: #704252;
}

.description {
    font-size: 13px;
    color: #896d78;
    margin-bottom: 10px;
    line-height: 1.5;
}

.price {
    color: #bd6c83;
    font-weight: bold;
    font-size: 17px;
    margin-bottom: 7px;
}

.stock {
    font-size: 13px;
    color: #896d78;
    margin-bottom: 13px;
}

.detail {
    display: block;
    text-align: center;
    background: linear-gradient(90deg, #c98294, #b96f84);
    color: white;
    text-decoration: none;
    padding: 11px;
    border-radius: 25px;
    font-size: 14px;
    font-weight: bold;
}

.detail:hover {
    background: #a95e74;
}

.empty {
    grid-column: 1 / -1;
    text-align: center;
    background: white;
    padding: 35px;
    border-radius: 15px;
    border: 1px solid #f3dce3;
}

@media (max-width: 800px) {
    .products {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .title h1 {
        font-size: 32px;
    }
}

@media (max-width: 550px) {
    .products {
        grid-template-columns: 1fr;
    }

    .container {
        padding: 20px 15px 45px;
    }

    .title {
        padding: 28px 12px;
    }

    .title h1 {
        font-size: 28px;
    }

    .photo {
        height: 220px;
    }
}

    </style>
</head>

<body>

    <!-- Navbar halaman katalog -->
    <header class="navbar">
        <div class="logo"> 
        <img
                src="{{ asset('images/logo.png') }}"
                alt="Logo Rich Gallery"
                onerror="this.style.display='none'"
            >
            <span>Rich Gallery</span>
        </div>

        <a href="/" class="back">← Beranda</a>
    </header>

    <!-- Isi katalog produk -->
    <main class="container">

        <div class="title">
            <h1>Katalog Buket</h1>
            <p>Pilih buket untuk momen spesialmu</p>
        </div>

        <section class="products">

            <!-- Mengulang kartu untuk setiap produk dari database -->
            @forelse ($produks as $produk)

                <div class="card">

                    <div class="photo">

                        <!-- Tampilkan foto jika produk memiliki foto -->
                        @if ($produk->foto)
                            <img
                                src="{{ asset('images/produk/' . $produk->foto) }}"
                                alt="{{ $produk->nama_produk }}"
                            >
                    @else
                        Foto Buket
                    @endif
                </div>

                    <div class="card-content">
                        <p class="category">
                            {{ $produk->kategori }}
                        </p>
                        <!-- Nama produk dari database -->
                        <h3>{{ $produk->nama_produk }}</h3>

                        <!-- Deskripsi produk -->
                        <p class="description">
                            {{ $produk->deskripsi ?: 'Buket cantik dari Rich Gallery.' }}
                        </p>

                        <!-- Harga dari database -->
                        <p class="price">
                            Rp{{ number_format($produk->harga, 0, ',', '.') }}
                        </p>

                        <!-- Stok produk -->
                        <p class="stock">
                            Stok: {{ $produk->stok }}
                        </p>

                        <!-- Tombol detail sementara -->
                        <a href="#" class="detail">
                            Lihat Detail
                        </a>

                    </div>

                </div>

            @empty

                <!-- Pesan jika belum ada produk aktif -->
                <div class="empty">
                    <h3>Produk belum tersedia</h3>
                    <p>Silakan cek kembali nanti.</p>
                </div>

            @endforelse

        </section>

    </main>

</body>
</html>
