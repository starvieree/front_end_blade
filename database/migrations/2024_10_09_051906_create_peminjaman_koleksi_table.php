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
        Schema::create('peminjaman_koleksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('peminjaman_id');
            $table->unsignedBigInteger('koleksi_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_koleksi');
    }
};
