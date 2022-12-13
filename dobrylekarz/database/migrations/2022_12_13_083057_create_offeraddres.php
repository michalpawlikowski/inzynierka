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
        Schema::create('offeraddres', function (Blueprint $table) {
            $table->id();
            $table->integer('offer_id');
            $table->integer('miasto_id');
            $table->string('ulica');
            $table->string('numerulicy');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offeraddres');
    }
};
