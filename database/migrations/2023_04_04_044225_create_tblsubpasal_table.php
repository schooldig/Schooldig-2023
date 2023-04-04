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
        Schema::create('tblsubpasal', function (Blueprint $table) {
            $table->string('idpasal', 5)->index('idpasal');
            $table->string('pasal', 400);
            $table->integer('skormin');
            $table->integer('skormax');
            $table->string('thnajaran', 9)->index('thnajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblsubpasal');
    }
};
