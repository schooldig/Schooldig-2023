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
        Schema::create('tblslogin', function (Blueprint $table) {
            $table->dateTime('timex')->default('2023-04-04 00:00:00');
            $table->string('host', 64)->default('');
            $table->string('userx', 20)->default('');
            $table->string('status', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblslogin');
    }
};
