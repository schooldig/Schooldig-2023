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
        Schema::create('tblsetalpha', function (Blueprint $table) {
            $table->integer('jumalpa1')->nullable();
            $table->string('tindakan1', 50)->nullable();
            $table->string('sanksi1', 50)->nullable();
            $table->integer('jumalpa2')->nullable();
            $table->string('tindakan2', 50)->nullable();
            $table->string('sanksi2', 50)->nullable();
            $table->integer('jumalpa3')->nullable();
            $table->string('tindakan3', 50)->nullable();
            $table->string('sanksi3', 50)->nullable();
            $table->integer('jumalpa4')->nullable();
            $table->string('tindakan4', 50)->nullable();
            $table->string('sanksi4', 50)->nullable();
            $table->integer('jumalpa5')->nullable();
            $table->string('tindakan5', 50)->nullable();
            $table->string('sanksi5', 50)->nullable();
            $table->integer('jumalpa6')->nullable();
            $table->string('tindakan6', 50)->nullable();
            $table->string('sanksi6', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsetalpha');
    }
};
