<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
public function up(): void
{
    Schema::create('payments', function (Blueprint $table) {
        $table->id();

        $table->foreignId('order_id')
              ->constrained('orders')
              ->cascadeOnDelete();

        $table->enum('metode_pembayaran', [
            'transfer_bank',
            'e_wallet',
            'tunai'
        ]);

        $table->decimal('jumlah_bayar', 12, 2);

        $table->string('bukti_pembayaran')->nullable();

        $table->enum('status', [
            'menunggu_pembayaran',
            'menunggu_verifikasi',
            'berhasil',
            'ditolak'
        ])->default('menunggu_pembayaran');

        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('payments');
}
};
