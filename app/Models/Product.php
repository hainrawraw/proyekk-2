<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi melalui model
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'foto',
        'stok',
        'aktif',
    ];

    // Mengatur tipe data kolom tertentu
    protected $casts = [
        'harga' => 'decimal:2',
        'stok' => 'integer',
        'aktif' => 'boolean',
    ];

    // Relasi ke pesanan
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}