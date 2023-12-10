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
        Schema::create('tb_diskon', function(Blueprint $table) {
            $table->id('id_diskon');
            $table->integer('id_produk');
            $table->date('date_from');
            $table->date('date_end');
            $table->string('kode_referal', 50);
            $table->decimal('disc_percent', 10, 0);
            $table->decimal('disc_nominal', 10, 0);
            $table->decimal('min_transaksi', 10, 0);
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
