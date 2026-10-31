 @extends('layouts.app')

@section('title', 'Kategori Buket - Rich Gallery')

@push('styles')
<style>
    .category-page {
        padding: 60px 0 80px;
        background: #fffafa;
        min-height: 70vh;
    }

    .category-heading {
        text-align: center;
        margin-bottom: 45px;
    }

    .category-heading .subtitle {
        color: #B86F87;
        font-size: 13px;
        font-weight: bold;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .category-heading h1 {
        font-family: 'Playfair Display', serif;
        font-size: 38px;
        margin-bottom: 12px;
        color: #603D4A;
    }

    .category-heading p {
        max-width: 600px;
        margin: auto;
        color: #806572;
        font-size: 15px;
    }

    .category-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 25px;
        align-items: stretch;
    }

    .category-card {
        display: flex;
        flex-direction: column;
        min-width: 0;
        background: #FFFFFF;
        border: 1px solid #F0DDE3;
        border-radius: 18px;
        padding: 14px;
        text-align: left;
        box-shadow: 0 5px 18px rgba(96, 61, 74, 0.06);
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 28px rgba(96, 61, 74, 0.12);
    }

    .category-photo {
        width: 100%;
        height: 220px;
        flex-shrink: 0;
        overflow: hidden;
        background: linear-gradient(135deg, #FBE8EE, #FFF4F7);
        border-radius: 12px;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #B86F87;
        font-size: 13px;
        text-align: center;
    }

    .category-photo img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .category-info {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        flex-grow: 1;
        padding: 0 5px 5px;
    }

    .category-card h2 {
        font-family: 'Playfair Display', serif;
        font-size: 21px;
        line-height: 1.4;
        margin: 0 0 8px;
        color: #603D4A;
    }

    .category-card p {
        font-size: 13px;
        line-height: 1.7;
        color: #806572;
        margin: 0 0 18px;
        flex-grow: 1;
    }

    .category-card .category-button {
        display: inline-block;
        background: #B86F87;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        font-size: 13px;
        font-weight: 600;
        margin-top: auto;
        transition: background 0.3s;
    }

    .category-card .category-button:hover {
        background: #92536A;
    }

    @media (max-width: 900px) {
        .category-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 600px) {
        .category-page {
            padding: 40px 0 55px;
        }

        .category-heading h1 {
            font-size: 30px;
        }

        .category-grid {
            grid-template-columns: 1fr;
            gap: 18px;
        }

        .category-photo {
            height: 240px;
        }
    }
</style>
@endpush

@section('content')

<section class="category-page">
    <div class="container">

        <div class="category-heading">
            <p class="subtitle">Rich Gallery Collection</p>

            <h1>Kategori Buket</h1>

            <p>
                Temukan berbagai pilihan buket dan hadiah spesial
                untuk merayakan setiap momen berharga.
            </p>
        </div>

        <div class="category-grid">

            <!-- Kategori 1: Fresh Flower -->
            <div class="category-card">
                <div class="category-photo">
                    <span>Foto Fresh Flower</span>
                </div>

                <div class="category-info">
                    <h2>Fresh Flower</h2>
                    <p>
                        Buket bunga segar dengan tampilan menawan
                        untuk orang tersayang.
                    </p>

                    <a href="{{ url('/produk?kategori=Fresh') }}"
                       class="category-button">
                        Lihat Produk &rarr;
                    </a>
                </div>
            </div>

            <!-- Kategori 2: Artificial Flower -->
            <div class="category-card">
                <div class="category-photo">
                    <span>Foto Artificial Flower</span>
                </div>

                <div class="category-info">
                    <h2>Artificial Flower</h2>
                    <p>
                        Buket bunga artifisial yang cantik
                        untuk hadiah istimewa.
                    </p>

                    <a href="{{ url('/produk?kategori=Artificial') }}"
                       class="category-button">
                        Lihat Produk &rarr;
                    </a>
                </div>
            </div>

            <!-- Kategori 3: Hot Air Balon -->
            <div class="category-card">
                <div class="category-photo">
                    <span>Foto Hot Air Balon</span>
                </div>

                <div class="category-info">
                    <h2>Hot Air Balon</h2>
                    <p>
                        Hadiah unik dengan tampilan menarik
                        untuk berbagai perayaan.
                    </p>

                    <a href="{{ url('/produk?kategori=Hot Air Balon') }}"
                       class="category-button">
                        Lihat Produk &rarr;
                    </a>
                </div>
            </div>

            <!-- Kategori 4: Sun Flower -->
            <div class="category-card">
                <div class="category-photo">
                    <span>Foto Sun Flower</span>
                </div>

                <div class="category-info">
                    <h2>Sun Flower</h2>
                    <p>
                        Buket bunga matahari yang ceria
                        untuk momen penuh kebahagiaan.
                    </p>

                    <a href="{{ url('/produk?kategori=Flower') }}"
                       class="category-button">
                        Lihat Produk &rarr;
                    </a>
                </div>
            </div>

            <!-- Kategori 5: Bouquet Graduation -->
            <div class="category-card">
                <div class="category-photo">
                    <span>Foto Bouquet Graduation</span>
                </div>

                <div class="category-info">
                    <h2>Bouquet Graduation</h2>
                    <p>
                        Buket spesial untuk merayakan kelulusan
                        dan pencapaian berharga.
                    </p>

                    <a href="{{ url('/produk?kategori=Graduation') }}"
                       class="category-button">
                        Lihat Produk &rarr;
                    </a>
                </div>
            </div>

            <!-- Kategori 6: Money Bouquet -->
            <div class="category-card">
                <div class="category-photo">
                    <span>Foto Money Bouquet</span>
                </div>

                <div class="category-info">
                    <h2>Money Bouquet</h2>
                    <p>
                        Buket uang sebagai hadiah kreatif
                        yang berkesan.
                    </p>

                    <a href="{{ url('/produk?kategori=Money') }}"
                       class="category-button">
                        Lihat Produk &rarr;
                    </a>
                </div>
            </div>

            <!-- Kategori 7: Bouquet Snack -->
            <div class="category-card">
                <div class="category-photo">
                    <span>Foto Bouquet Snack</span>
                </div>

                <div class="category-info">
                    <h2>Bouquet Snack</h2>
                    <p>
                        Perpaduan camilan favorit yang cocok
                        untuk hadiah.
                    </p>

                    <a href="{{ url('/produk?kategori=Snack') }}"
                       class="category-button">
                        Lihat Produk &rarr;
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection 