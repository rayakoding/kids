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
        Schema::create('periksa', function (Blueprint $table) {
            $table->id();
            $table->string('periksa_ke');
            $table->unsignedBigInteger('kehamilan_id');
            $table->date('tgl');
            $table->string('bb');
            $table->string('tfu');
            $table->string('td_a');
            $table->string('td_b');
            $table->string('imunisasi');
            $table->string('denyut');
            $table->string('hb');
            $table->unsignedBigInteger('puskesmas_id');
            $table->timestamps();

            $table->foreign('kehamilan_id')->references('id')->on('kehamilan')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksa');
    }
};
