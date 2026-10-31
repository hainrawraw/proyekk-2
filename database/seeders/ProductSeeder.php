<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Data contoh produk buket Rich Gallery
        DB::table('products')->insert([
            [
                'nama_produk' => 'Graduation Medium',
                'deskripsi' => 'Buket wisuda ukuran medium.',
                'harga' => 150000,
                'foto' => null,
                'stok' => 10,
                'aktif' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Graduation Mini',
                'deskripsi' => 'Buket wisuda ukuran mini.',
                'harga' => 85000,
                'foto' => null,
                'stok' => 10,
                'aktif' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Money Bouquet 20 Lembar',
                'deskripsi' => 'Buket uang dengan 20 lembar uang.',
                'harga' => 250000,
                'foto' => null,
                'stok' => 5,
                'aktif' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Money Bouquet 40 Lembar',
                'deskripsi' => 'Buket uang dengan 40 lembar uang.',
                'harga' => 450000,
                'foto' => null,
                'stok' => 5,
                'aktif' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Sun Flower 2',
                'deskripsi' => 'Buket bunga dengan tampilan cerah dan cantik.',
                'harga' => 175000,
                'foto' => null,
                'stok' => 8,
                'aktif' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
} 