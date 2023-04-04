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
        Schema::create('tblpasal', function (Blueprint $table) {
            $table->integer('urut', true);
            $table->char('idkategori', 3)->default('0');
            $table->string('idpasal', 5)->default('0')->unique('idpasal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblpasal');
    }
};
