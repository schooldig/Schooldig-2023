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
        Schema::create('tblizinpulang', function (Blueprint $table) {
            $table->integer('idizinpulang', true);
            $table->string('noreg', 50)->default('');
            $table->date('tglizin');
            $table->time('jampulang');
            $table->string('alasan', 200)->default('');
            $table->integer('statusizin');
            $table->string('namaacc', 100)->default('');
            $table->string('ditolak', 100)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblizinpulang');
    }
};
