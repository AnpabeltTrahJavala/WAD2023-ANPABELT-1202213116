<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create('Showroom', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_mobil');
            $table->string('brand_mobil');
            $table->string('warna_mobil');
            $table->string('tipe_mobil');
            $table->integer('harga_mobil');
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