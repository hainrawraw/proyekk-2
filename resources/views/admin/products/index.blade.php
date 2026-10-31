
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk - Rich Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fff8f5;
            color: #5c4141;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
        }

        h1 {
            margin-top: 0;
        }

        a, button {
            background: #b77979;
            color: white;
            padding: 10px 14px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            text-align: left;
        }

        th {
            background: #f9e8e4;
        }

        .aksi {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .hapus {
            display: inline;
        }

        .hapus button {
            background: #b94b4b;
        }

        .pesan {
            background: #e4f5e4;
            padding: 12px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rich Gallery</h1>
        <p>Kelola produk buket bunga</p>

        @if (session('success'))
            <div class="pesan">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('admin.products.create') }}">
            + Tambah Produk
        </a>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->nama_produk }}</td>
                        <td>Rp{{ number_format((float) $product->harga, 0, ',', '.') }}</td>
                        <td>{{ $product->stok }}</td>
                        <td>
                            {{ $product->aktif ? 'Aktif' : 'Nonaktif' }}
                        </td>
                        <td>
                            <div class="aksi">
                                <a href="{{ route('admin.products.edit', $product->id) }}">
                                    Edit
                                </a>

                                <form
                                    class="hapus"
                                    action="{{ route('admin.products.destroy', $product->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus produk ini?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            Belum ada produk buket.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>