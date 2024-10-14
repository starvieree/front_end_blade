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
        Schema::table('peminjaman_koleksi', function (Blueprint $table) {
            $table
                ->foreign('peminjaman_id')
                ->references('id')
                ->on('peminjaman')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('koleksi_id')
                ->references('id')
                ->on('koleksi')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peminjaman_koleksi', function (Blueprint $table) {
            $table->dropForeign(['peminjaman_id']);
            $table->dropForeign(['koleksi_id']);
        });
    }
};
