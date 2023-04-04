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
        Schema::create('tblkartuuid', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('uid', 20)->unique('uid');
            $table->dateTime('tanggal')->useCurrent();
            $table->string('idmesin', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblkartuuid');
    }
};
