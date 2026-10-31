
<footer class="footer" id="kontak">
    <div class="footer-container">

        <div class="footer-brand">
            <h2>Rich Gallery</h2>
            <p>
                Hadirkan kebahagiaan melalui buket dan hadiah
                spesial untuk setiap momen berharga.
            </p>
        </div>

        <div class="footer-info" id="tentang-kami">
            <h3>Tentang Kami</h3>
            <p>
                Rich Gallery menyediakan berbagai pilihan
                buket dan hadiah yang bisa disesuaikan
                untuk orang tersayang.
            </p>
        </div>

        <div class="footer-contact">
            <h3>Kontak Toko</h3>

            <p>
                <strong>Alamat:</strong><br>
                <span>Alamat toko akan ditambahkan nanti.</span>
            </p>

            <p>
                <strong>WhatsApp:</strong><br>
                <a href="https://wa.me/+62 87894009791" target="_blank"
                   rel="noopener noreferrer">
                    Hubungi Rich Gallery
                </a>
            </p>

            <p>
                <strong>Instagram:</strong><br>
                <a href="https://www.instagram.com/USERNAME/" target="_blank"
                   rel="noopener noreferrer">
                    @USERNAME
                </a>
            </p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Rich Gallery. All rights reserved.</p>
    </div>
</footer>

<style>
    .footer {
        background-color: #F8E8ED;
        color: #603D4A;
        margin-top: 60px;
        padding: 50px 5% 0;
    }

    .footer-container {
        max-width: 1200px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 40px;
        padding-bottom: 35px;
    }

    .footer h2 {
        font-size: 25px;
        margin-bottom: 12px;
    }

    .footer h3 {
        font-size: 17px;
        margin-bottom: 15px;
    }

    .footer p {
        font-size: 14px;
        line-height: 1.8;
        margin-bottom: 12px;
    }

    .footer a {
        color: #A34F70;
        overflow-wrap: anywhere;
    }

    .footer a:hover {
        text-decoration: underline;
    }

    .footer-bottom {
        border-top: 1px solid #E8CDD6;
        text-align: center;
        padding: 18px 0;
    }

    .footer-bottom p {
        margin: 0;
    }

    @media (max-width: 768px) {
        .footer-container {
            grid-template-columns: 1fr;
            gap: 25px;
        }
    }
</style>
