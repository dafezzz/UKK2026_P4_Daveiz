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
    Schema::create('peminjaman', function (Blueprint $table) {
        $table->id();
        $table->string('kode_peminjaman')->unique();

        $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        $table->foreignId('book_id')->constrained('books')->cascadeOnDelete();

        $table->date('tanggal_pinjam');
        $table->date('tanggal_kembali')->nullable();

        $table->enum('status', ['pending','approved','rejected','dikembalikan'])
              ->default('pending');

        $table->foreignId('approved_by')->nullable()->constrained('users')->nullOnDelete();
        $table->timestamp('approved_at')->nullable();
        $table->timestamp('returned_at')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
