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
        Schema::create('pbk', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('GroupID')->default(-1);
            $table->string('Name', 40);
            $table->string('Number', 15);
            $table->enum('pilih', ['Y', 'N'])->default('N');
            $table->integer('id_user');
            $table->enum('is_public', ['true', 'false'])->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pbk');
    }
};
