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
        Schema::create('bibliografi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('isbn', 45);
            $table->char('judul', 200);
            $table->char('penulis', 200);
            $table->unsignedBigInteger('harga');
            $table->date('perolehan');
            $table->unsignedBigInteger('bibliografi_kategori_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bibliografi');
    }
};
