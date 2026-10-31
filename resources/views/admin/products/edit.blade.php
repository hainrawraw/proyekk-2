
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Rich Gallery</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff8f5;
            color: #5c4141;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            box-sizing: border-box;
        }

        button, .kembali {
            display: inline-block;
            margin-top: 20px;
            padding: 11px 16px;
            background: #b77979;
            color: white;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
        }

        .error {
            color: #b00020;
        }

        img {
            max-width: 180px;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Produk Buket</h1>

        @if ($errors->any())
            <div class="error">
                <p>Periksa kembali data berikut:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.products.update', $product->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="nama_produk">Nama Produk</label>
            <input type="text" id="nama_produk" name="nama_produk"
                   value="{{ old('nama_produk', $product->nama_produk) }}"
                   required>

            <label for="deskripsi">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi"
                      rows="4">{{ old('deskripsi', $product->deskripsi) }}</textarea>

            <label for="harga">Harga (Rp)</label>
            <input type="number" id="harga" name="harga"
                   min="0" step="0.01"
                   value="{{ old('harga', $product->harga) }}"
                   required>

            <label for="foto">Foto Produk Baru (opsional)</label>
            <input type="file" id="foto" name="foto"
                   accept=".jpg,.jpeg,.png,.webp">

            @if ($product->foto)
                <p>Foto saat ini:</p>
                <img src="{{ asset('storage/' . $product->foto) }}"
                     alt="Foto {{ $product->nama_produk }}">
            @endif

            <label for="stok">Stok</label>
            <input type="number" id="stok" name="stok"
                   min="0"
                   value="{{ old('stok', $product->stok) }}"
                   required>

            <label for="aktif">Status Produk</label>
            <select id="aktif" name="aktif" required>
                <option value="1"
                    {{ old('aktif', $product->aktif ? '1' : '0') == '1' ? 'selected' : '' }}>
                    Aktif
                </option>
                <option value="0"
                    {{ old('aktif', $product->aktif ? '1' : '0') == '0' ? 'selected' : '' }}>
                    Nonaktif
                </option>
            </select>

            <button type="submit">Simpan Perubahan</button>

            <a href="{{ route('admin.products.index') }}"
               class="kembali">Kembali</a>
        </form>
    </div>
</body>
</html>