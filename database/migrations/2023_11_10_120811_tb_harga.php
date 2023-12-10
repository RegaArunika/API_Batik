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
        Schema::create('tb_harga', function(Blueprint $table) {
            $table->id('id_harga');
            $table->integer('id_produk');
            $table->decimal('harga_produk', 10, 3);
            $table->date('date_from');
            $table->date('date_end');
            $table->integer('quantity');
            $table->decimal('harga_dewasa', 10, 0);
            $table->decimal('harga_anak', 10, 0);
            $table->decimal('harga_instant', 10, 0);
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
