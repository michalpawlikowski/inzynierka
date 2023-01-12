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
        Schema::create('miasta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('woj_id');
            $table->string('nazwa');


            $table->foreign('woj_id')->references('id')->on('woje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miasta');
    }
};
