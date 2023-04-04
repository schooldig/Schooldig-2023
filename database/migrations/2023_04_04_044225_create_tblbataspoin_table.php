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
        Schema::create('tblbataspoin', function (Blueprint $table) {
            $table->string('tindakan1', 50)->default('0');
            $table->integer('poin1')->default(0);
            $table->string('sanksi1', 50)->default('0');
            $table->string('tindakan2', 50)->default('0');
            $table->integer('poin2')->default(0);
            $table->string('sanksi2', 50)->default('0');
            $table->string('tindakan3', 50)->default('0');
            $table->integer('poin3')->default(0);
            $table->string('sanksi3', 50)->default('0');
            $table->string('tindakan4', 50)->default('0');
            $table->integer('poin4')->default(0);
            $table->string('sanksi4', 50)->default('0');
            $table->string('tindakan5', 50)->default('0');
            $table->integer('poin5')->default(0);
            $table->string('sanksi5', 50)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblbataspoin');
    }
};
