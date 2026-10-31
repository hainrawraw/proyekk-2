
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Rich Gallery')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FFF9FA;
            color: #603D4A;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .btn-primary {
            display: inline-block;
            background-color: #B86F87;
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #92536A;
        }
    </style>

    @stack('styles')
</head>
<body>

    {{-- Navbar --}}
    @include('layouts.nav')

    {{-- Konten halaman --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    @stack('scripts')
</body>
</html>
