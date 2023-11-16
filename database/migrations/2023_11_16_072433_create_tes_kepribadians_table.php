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
        Schema::create('tes_kepribadians', function (Blueprint $table) {
            $table->int('id_link');
            $table->string('img_path');
            $table->string('link');
            $table->int('link_status');
            $table->int('author_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tes_kepribadians');
    }
};
