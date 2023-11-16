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
        Schema::create('moduls', function (Blueprint $table) {
            $table->id('id_modul');
            $table->int('pertemuan');
            $table->string('judul');
            $table->int('id_matpel');
            $table->int('kelas');
            $table->string('tipe');
            $table->string('file_path');
            $table->int('author_id');

            $table->foreign('id_matpel')->references('id_matpel')->on('mata_pelajarans');
            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moduls');
    }
};
