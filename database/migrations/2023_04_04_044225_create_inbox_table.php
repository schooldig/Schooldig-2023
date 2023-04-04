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
        Schema::create('inbox', function (Blueprint $table) {
            $table->increments('ID');
            $table->timestamp('ReceivingDateTime')->useCurrent();
            $table->string('SenderNumber', 20)->default('');
            $table->string('ToNumber', 20)->default('');
            $table->string('TextDecoded', 2000);
            $table->string('image', 2000)->default('');
            $table->string('file', 2000)->default('');
            $table->string('url', 2000)->default('');
            $table->enum('Processed', ['false', 'true'])->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inbox');
    }
};
