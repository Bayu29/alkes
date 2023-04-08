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
        Schema::table('nomenklatur_keselamatan_listrik', function (Blueprint $table) {
            $table->string('ambang_batas')->after('unit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nomenklatur_keselamatan_listrik', function (Blueprint $table) {
            $table->dropColumn('ambang_batas');
        });
    }
};