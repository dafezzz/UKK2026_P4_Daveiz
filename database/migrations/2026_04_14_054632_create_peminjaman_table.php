<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();

            // relasi user (yang minjam)
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            // relasi buku
            $table->foreignId('buku_id')
                  ->constrained()
                  ->cascadeOnDelete();

            // tanggal
            $table->dateTime('tanggal_pinjam')->nullable();
            $table->dateTime('tanggal_kembali')->nullable();

            // status (fleksibel, ga ribet enum)
            $table->string('status')->default('pending');
            // pending | dipinjam | dikembalikan | ditolak

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};