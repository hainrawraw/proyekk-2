
<nav class="navbar">
    <div class="nav-container">

        {{-- Logo Rich Gallery --}}
        <a href="{{ url('/') }}" class="brand">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Logo Rich Gallery"
                onerror="this.style.display='none'"
            >
            <span>Rich Gallery</span>
        </a>

        {{-- Tombol menu untuk HP --}}
        <button
            class="menu-toggle"
            type="button"
            aria-label="Buka menu navigasi"
            aria-expanded="false"
            onclick="
                const menu = document.getElementById('nav-menu');
                const terbuka = menu.classList.toggle('active');
                this.setAttribute('aria-expanded', terbuka);
            "
        >
            ☰
        </button>

        {{-- Menu navigasi --}}
        <div class="nav-menu" id="nav-menu">
            <a href="{{ url('/') }}"
               class="{{ request()->is('/') ? 'active' : '' }}">
                Beranda
            </a>

            <a href="{{ url('/kategori') }}"
   class="{{ request()->is('kategori*') ? 'active' : '' }}">
    Katalog
</a>

            <a href="{{ url('/#tentang-kami') }}">
                Tentang Kami
            </a>

            <a href="{{ url('/#kontak') }}">
                Kontak
            </a>

            <a href="https://wa.me/6287846398202" class="nav-button" target="_blank" rel="noopener noreferrer">
    Custom Buket
</a>
        </div>

    </div>
</nav>

<style>
    .navbar {
        background-color: #FFF9FA;
        border-bottom: 1px solid #F2E1E6;
        position: sticky;
        top: 0;
        z-index: 1000;
        width: 100%;
    }

    .nav-container {
        max-width: 1200px;
        width: 90%;
        margin: auto;
        min-height: 85px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .brand {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #603D4A;
        font-size: 23px;
        font-weight: bold;
        white-space: nowrap;
    }

    .brand img {
        width: 52px;
        height: 52px;
        object-fit: contain;
    }

    .nav-menu {
        display: flex;
        align-items: center;
        gap: 28px;
    }

    .nav-menu a {
        color: #603D4A;
        font-size: 14px;
        transition: color 0.3s;
    }

    .nav-menu a:hover,
    .nav-menu a.active {
        color: #B86F87;
    }

    .nav-menu .nav-button {
        background-color: #B86F87;
        color: white;
        padding: 11px 19px;
        border-radius: 25px;
    }

    .nav-menu .nav-button:hover {
        background-color: #92536A;
        color: white;
    }

    .menu-toggle {
        display: none;
        border: none;
        background: none;
        color: #603D4A;
        font-size: 27px;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .nav-container {
            min-height: 72px;
            flex-wrap: wrap;
            padding: 10px 0;
        }

        .brand {
            font-size: 20px;
        }

        .brand img {
            width: 44px;
            height: 44px;
        }

        .menu-toggle {
            display: block;
        }

        .nav-menu {
            display: none;
            width: 100%;
            flex-direction: column;
            align-items: stretch;
            gap: 0;
            padding-bottom: 10px;
        }

        .nav-menu.active {
            display: flex;
        }

        .nav-menu a {
            padding: 12px;
        }

        .nav-menu .nav-button {
            text-align: center;
            margin-top: 8px;
        }
    }
</style>
