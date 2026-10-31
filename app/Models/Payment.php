<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'metode_pembayaran',
        'jumlah_bayar',
        'bukti_pembayaran',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'jumlah_bayar' => 'decimal:2',
        ];
    }

    // Relasi ke pesanan
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}