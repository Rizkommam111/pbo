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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nis');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('asal_sekolah');
            $table->string('jurusan');
            $table->timestamps();
        });
        Schema::create('jurusans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_jurusan');
            $table->string('nama_jurusan');
            $table->string('tingkat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
        Schema::dropIfExists('jurusans');
    }
};
