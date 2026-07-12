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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 100);
            $table->string('penulis', 100);
            $table->date('tanggal_rilis');
            $table->string('slug');
            $table->text('isi_berita');
            $table->text('ringkasan_berita');
            $table->string('gambar_berita');
            $table->enum('status', ['draft', 'publish', 'archive']);
            $table->enum('kategori', ['GROW', 'SUAR', 'GLI', 'CIVIC', 'Ekososlab', 'Blog', 'Kotak Suara Lingkungan', 'After Class Report', 'You Rings']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
