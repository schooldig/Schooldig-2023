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
        Schema::create('tblsetjam', function (Blueprint $table) {
            $table->integer('id_jam', true);
            $table->string('shif', 50)->default('0');
            $table->string('nama_jam', 20);
            $table->time('time_in');
            $table->time('limit_in');
            $table->time('time_out');
            $table->time('limit_out');
            $table->tinyInteger('statusjam')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsetjam');
    }
};
