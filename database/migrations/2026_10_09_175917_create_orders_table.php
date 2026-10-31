
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Membuat tabel untuk menyimpan pesanan pelanggan
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // Hubungan pesanan dengan akun pelanggan
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            // Hubungan pesanan dengan produk buket
            $table->foreignId('product_id')
                  ->constrained('products')
                  ->restrictOnDelete();

            // Informasi pemesanan
            $table->unsignedInteger('jumlah');
            $table->decimal('harga_satuan', 12, 2);
            $table->decimal('total_harga', 12, 2);

            // Data pelanggan untuk pengiriman atau pengambilan
            $table->string('nama_penerima');
            $table->string('no_hp', 20);
            $table->text('alamat')->nullable();
            $table->enum('metode_penerimaan', [
                'ambil_sendiri',
                'diantar'
            ]);
            $table->dateTime('jadwal_pesanan');

            // Status pesanan
            $table->enum('status', [
                'menunggu_konfirmasi',
                'dikonfirmasi',
                'diproses',
                'siap_diambil',
                'dikirim',
                'selesai',
                'dibatalkan'
            ])->default('menunggu_konfirmasi');

            $table->text('catatan')->nullable();

            $table->timestamps();
        });
    }

    // Menghapus tabel jika migration dibatalkan
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};