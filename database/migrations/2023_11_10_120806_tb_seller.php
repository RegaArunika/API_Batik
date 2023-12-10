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
        Schema::create('tb_seller', function(Blueprint $table) {
            $table->id('id_seller');
            $table->string('nama_seller', 50);
            $table->text('desk_seller');
            $table->string('kontak', 50);
            $table->string('location');
            $table->string('logo_seller', 55);
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
