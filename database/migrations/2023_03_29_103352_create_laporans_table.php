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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('no_laporan', 100)->nullable();
            $table->foreignId('user_created')->constrained('pelaksana_teknisis')->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('faskes_id')->nullable()->constrained('faskes')->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('nomenklatur_id')->constrained('nomenklaturs')->restrictOnUpdate()->restrictOnDelete();
            $table->dateTime('tgl_laporan');
            $table->string('status_laporan', 150);
            $table->foreignId('user_review')->nullable()->constrained('users')->restrictOnUpdate()->restrictOnDelete();
            $table->dateTime('tgl_review')->nullable();
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
        Schema::dropIfExists('laporans');
    }
};
