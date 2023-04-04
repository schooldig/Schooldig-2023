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
        Schema::create('tblthajaran', function (Blueprint $table) {
            $table->integer('idth', true);
            $table->string('thajaran', 50)->unique('thajaran');
            $table->enum('aktif', ['Y', 'N']);
            $table->enum('ttp', ['Y', 'N']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblthajaran');
    }
};
