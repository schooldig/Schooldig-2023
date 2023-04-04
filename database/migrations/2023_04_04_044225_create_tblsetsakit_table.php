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
        Schema::create('tblsetsakit', function (Blueprint $table) {
            $table->integer('jumsakit1')->nullable();
            $table->integer('plus1')->nullable();
            $table->string('tindakan1', 50)->nullable();
            $table->string('sanksi1', 50)->nullable();
            $table->integer('jumsakit2')->nullable();
            $table->integer('plus2')->nullable();
            $table->string('tindakan2', 50)->nullable();
            $table->string('sanksi2', 50)->nullable();
            $table->integer('jumsakit3')->nullable();
            $table->integer('plus3')->nullable();
            $table->string('tindakan3', 50)->nullable();
            $table->string('sanksi3', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsetsakit');
    }
};
