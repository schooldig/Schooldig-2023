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
        Schema::create('sentitems', function (Blueprint $table) {
            $table->increments('ID');
            $table->timestamp('InsertIntoDB')->useCurrent();
            $table->string('DestinationNumber', 50)->default('');
            $table->string('FromNumber', 20)->default('');
            $table->string('TextDecoded', 2000);
            $table->string('SenderID', 20);
            $table->string('Status', 50)->default('SendingOK');
            $table->string('CreatorID', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sentitems');
    }
};
