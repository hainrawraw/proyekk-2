<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'jumlah',
        'harga_satuan',
        'total_harga',
        'nama_penerima',
        'no_hp',
        'alamat',
        'metode_penerimaan',
        'jadwal_pesanan',
        'status',
        'catatan',
    ];

    protected function casts(): array
    {
        return [
            'jumlah' => 'integer',
            'harga_satuan' => 'decimal:2',
            'total_harga' => 'decimal:2',
            'jadwal_pesanan' => 'datetime',
        ];
    }

    // Relasi ke pengguna
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke produk
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relasi ke pembayaran
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}