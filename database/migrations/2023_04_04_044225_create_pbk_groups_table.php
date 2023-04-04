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
        Schema::create('pbk_groups', function (Blueprint $table) {
            $table->char('Name', 20)->unique('Name');
            $table->integer('ID', true);
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
        Schema::dropIfExists('pbk_groups');
    }
};
