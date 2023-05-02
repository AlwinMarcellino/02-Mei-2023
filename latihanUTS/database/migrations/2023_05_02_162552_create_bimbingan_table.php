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
        Schema::create('bimbingan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('npm')->on('mahasiswa')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('dosen_id')->constrained('kode_dosen')->on('dosen')->onUpdate('cascade')->onDelete('cascade');
            $table->string('jenis_bimbingan', 20);
            $table->string('materi_bimbingan');
            $table->date('tanggal_bimbingan');
            $table->text('catatan_dosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bimbingan');
    }
};
