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
        Schema::create('tbluser', function (Blueprint $table) {
            $table->string('username', 10)->primary();
            $table->string('pass')->default('');
            $table->string('nama', 50)->default('Noname');
            $table->smallInteger('ids')->default(1);
            $table->smallInteger('c1')->default(0);
            $table->smallInteger('c2')->default(0);
            $table->smallInteger('c3')->default(0);
            $table->smallInteger('c4')->default(0);
            $table->smallInteger('c5')->default(0);
            $table->smallInteger('c6')->default(0);
            $table->smallInteger('c7')->default(0);
            $table->smallInteger('c8')->default(0);
            $table->smallInteger('c9')->default(0);
            $table->smallInteger('c10')->default(0);
            $table->smallInteger('c11')->default(0);
            $table->smallInteger('c12')->default(0);
            $table->smallInteger('c13')->default(0);
            $table->smallInteger('c14')->default(0);
            $table->smallInteger('c15')->default(0);
            $table->smallInteger('c16')->default(0);
            $table->smallInteger('c17')->default(0);
            $table->smallInteger('c18')->default(0);
            $table->smallInteger('c19')->default(0);
            $table->smallInteger('c20')->default(0);
            $table->smallInteger('c21')->default(0);
            $table->smallInteger('c22')->default(0);
            $table->smallInteger('c23')->default(0);
            $table->smallInteger('c24')->default(0);
            $table->smallInteger('c25')->default(0);
            $table->smallInteger('c26')->default(0);
            $table->smallInteger('c27')->default(0);
            $table->smallInteger('c28')->default(0);
            $table->smallInteger('c29')->default(0);
            $table->smallInteger('c30')->default(0);
            $table->smallInteger('c31')->default(0);
            $table->smallInteger('c32')->default(0);
            $table->smallInteger('c33')->default(0);
            $table->smallInteger('c34')->default(0);
            $table->smallInteger('c35')->default(0);
            $table->smallInteger('c36')->default(0);
            $table->smallInteger('c37')->default(0);
            $table->smallInteger('c38')->default(0);
            $table->smallInteger('c39')->default(0);
            $table->smallInteger('c40')->default(0);
            $table->smallInteger('c41')->default(0);
            $table->smallInteger('c42')->default(0);
            $table->smallInteger('c43')->default(0);
            $table->smallInteger('c44')->default(0);
            $table->smallInteger('G1')->default(0);
            $table->smallInteger('G2')->default(0);
            $table->smallInteger('G3')->default(0);
            $table->smallInteger('G4')->default(0);
            $table->smallInteger('G5')->default(0);
            $table->smallInteger('G6')->default(0);
            $table->smallInteger('G7')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbluser');
    }
};
