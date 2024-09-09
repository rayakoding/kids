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
        Schema::create('kehamilan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('desa_id');
            $table->integer('hamil');
            $table->integer('lahir');
            $table->integer('aborsi');
            $table->date('hpht');
            $table->string('hpl');
            $table->string('bb');
            $table->string('tb');
            $table->string('lila');
            $table->string('imt');
            $table->string('bidan');
            $table->string('alamat_bidan');
            $table->string('status');
            $table->string('noreg');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehamilan');
    }
};
