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
        Schema::create('tbllevelwa', function (Blueprint $table) {
            $table->string('levelwa', 50)->nullable();
            $table->integer('siswa')->nullable();
            $table->integer('ortu')->nullable();
            $table->integer('walikelas')->nullable();
            $table->integer('bk')->nullable();
            $table->integer('groupkelas')->nullable();
            $table->integer('sekolah')->nullable();
            $table->integer('guru')->nullable();
            $table->string('senderid', 5)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbllevelwa');
    }
};
