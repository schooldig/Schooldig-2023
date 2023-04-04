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
        Schema::create('tblagtatib', function (Blueprint $table) {
            $table->integer('idagtatib', true);
            $table->string('nmtatib', 50);
            $table->string('nip', 50);
            $table->string('jabatan', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblagtatib');
    }
};
