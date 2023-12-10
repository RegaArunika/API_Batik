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
        //
        Schema::create('tb_produk', function(Blueprint $table) {
            $table->id('id_produk');
            $table->string('kode_produk', 15);
            $table->string('nama_produk',55);
            $table->text('desk_produk');
            $table->string('img_produk', 50);
            $table->integer('id_seller');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
