<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pelanggan | Rich Gallery</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, sans-serif; }
        body { min-height: 100vh; background: #fceff3; display: flex; justify-content: center; align-items: center; padding: 25px; }
        .login-container { width: 100%; max-width: 1050px; min-height: 580px; display: flex; background: #fff; border-radius: 20px; overflow: hidden; box-shadow: 0 12px 35px rgba(155,82,101,.15); }
        .left-section { width: 50%; background: linear-gradient(135deg,#f9dce5,#f3c3d1); display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 40px; }
        .logo { width: 60px; height: 60px; border-radius: 16px; background: #fff; color: #a4536c; display: flex; align-items: center; justify-content: center; font-size: 22px; font-weight: bold; margin-bottom: 18px; box-shadow: 0 5px 15px rgba(155,82,101,.12); }
        .brand-name { font-family: Georgia,serif; font-size: 38px; color: #653344; margin-bottom: 10px; }
        .brand-description { font-size: 14px; color: #805363; line-height: 1.6; margin-bottom: 28px; }
        .bouquet-photo { display: block; width: 100%; max-width: 330px; height: 240px; object-fit: cover; border-radius: 16px; box-shadow: 0 10px 25px rgba(100,45,65,.15); }
        .right-section { width: 50%; display: flex; justify-content: center; align-items: center; padding: 50px; }
        .login-box { width: 100%; max-width: 380px; }
        .login-title { font-size: 28px; color: #653344; margin-bottom: 10px; }
        .login-subtitle { color: #8e747d; font-size: 14px; line-height: 1.6; margin-bottom: 28px; }
        .error-message { color: #c0395b; background: #fff0f3; border: 1px solid #f2c5d0; border-radius: 8px; padding: 10px 12px; font-size: 13px; margin-bottom: 16px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; color: #653344; font-size: 13px; font-weight: bold; margin-bottom: 9px; }
        .input-box { width: 100%; height: 48px; border: 1px solid #ead4dc; background: #fffafb; border-radius: 9px; padding: 0 14px; display: flex; align-items: center; gap: 10px; transition: .2s; }
        .input-box:focus-within { border-color: #c97994; box-shadow: 0 0 0 3px rgba(201,121,148,.12); }
        .input-icon { color: #b66c83; font-size: 16px; }
        .input-box input { width: 100%; border: none; outline: none; background: transparent; color: #653344; font-size: 14px; }
        .input-box input::placeholder { color: #b6a2aa; }
        .login-button { width: 100%; height: 49px; border: none; border-radius: 9px; background: #a4536c; color: #fff; font-size: 14px; font-weight: bold; cursor: pointer; margin-top: 5px; transition: .2s; }
        .login-button:hover { background: #853e55; }
        .register-text { margin-top: 22px; text-align: center; font-size: 13px; color: #8e747d; }
        .register-text a { color: #a4536c; text-decoration: none; font-weight: bold; }
        .register-text a:hover { text-decoration: underline; }
        @media (max-width: 760px) {
            .login-container { flex-direction: column; }
            .left-section, .right-section { width: 100%; }
            .left-section, .right-section { padding: 35px 25px; }
            .brand-name { font-size: 32px; }
            .bouquet-photo { max-width: 280px; height: 200px; }
        }
    </style>
</head>
<body>
    <main class="login-container">
        <section class="left-section">
            <div class="logo">RG</div>
            <h1 class="brand-name">Rich Gallery</h1>
            <p class="brand-description">Buket Bunga untuk Setiap Momen Spesial</p>

            <!-- Pastikan nama file foto sesuai: public/images/bouquet-login.jpeg -->
            <img src="{{ asset('images/bouquet-login.jpeg') }}" alt="Buket bunga Rich Gallery" class="bouquet-photo">
        </section>

        <section class="right-section">
            <div class="login-box">
                <h2 class="login-title">Login Pelanggan</h2>
                <p class="login-subtitle">
                    Selamat datang kembali!
                    Masuk untuk melanjutkan pemesanan buketmu.
                </p>

                <!-- Pesan error validasi atau email/password yang salah -->
                @if ($errors->any())
                    <div class="error-message">{{ $errors->first() }}</div>
                @endif

                <!-- Form login Laravel -->
                <form action="{{ route('login.process') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-box">
                            <span class="input-icon" aria-hidden="true">&#9993;</span>
                            <input type="email" id="email" name="email"
                                   placeholder="Masukkan email kamu" autocomplete="email"
                                   value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-box">
                            <span class="input-icon" aria-hidden="true">&#128274;</span>
                            <input type="password" id="password" name="password"
                                   placeholder="Masukkan password" autocomplete="current-password" required>
                        </div>
                    </div>

                    <button type="submit" class="login-button">Login</button>
                </form>

                <p class="register-text">
                    Belum punya akun?
                    <a href="{{ route('register') }}">Daftar sekarang</a>
                </p>
            </div>
        </section>
    </main>
</body>
</html>
