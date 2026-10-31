
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Membuat tabel untuk menyimpan data produk buket
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // Informasi produk buket
            $table->string('nama_produk');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 12, 2);
            $table->string('foto')->nullable();
            $table->unsignedInteger('stok')->default(0);
            $table->boolean('aktif')->default(true);

            // Waktu pembuatan dan perubahan data
            $table->timestamps();
        });
    }

    // Menghapus tabel jika migration dibatalkan
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};