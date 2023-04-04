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
        Schema::create('tblkelas', function (Blueprint $table) {
            $table->integer('idkelas', true);
            $table->string('nmkelas', 50)->unique('nmkelas');
            $table->string('kelas', 5);
            $table->string('idjurusan', 5);
            $table->string('idwali', 10)->default('');
            $table->string('idbk', 10)->default('');
            $table->string('color', 15)->nullable()->default('$005BFFFF');
            $table->string('shif', 15)->default('Pagi');
            $table->string('wagroup', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblkelas');
    }
};
