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
            $table->int('id_modul');
            $table->int('pertemuan');
            $table->string('judul');
            $table->int('fk_id_matpel');
            $table->int('kelas');
            $table->string('tipe');
            $table->string('file_path');
            $table->int('author_id');
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
