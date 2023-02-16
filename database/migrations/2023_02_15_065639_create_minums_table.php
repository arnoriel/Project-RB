<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minums', function (Blueprint $table) {
            $table->id();
            $table->string('cover')->nullable;
            $table->string('nama');
            $table->string('deskripsi');
            $table->string('bahan');
            $table->string('caramembuat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('minums');
    }
};
