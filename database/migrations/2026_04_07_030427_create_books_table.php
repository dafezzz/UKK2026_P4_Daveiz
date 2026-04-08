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
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('kategori')->nullable();
        $table->string('pengarang')->nullable();
        $table->string('penerbit')->nullable();
        $table->year('tahun_terbit')->nullable();
        $table->integer('stok')->default(0);
        $table->string('cover')->nullable();

        $table->foreignId('rak_id')->nullable()->constrained('raks')->nullOnDelete();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
