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
        Schema::create('offerservices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('offer_addres_id');
            $table->unsignedBigInteger('usluga_id');
            $table->integer('cena');
          


            $table->foreign('offer_addres_id')->references('id')->on('offeraddres')->onDelete('cascade');
            $table->foreign('usluga_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offerservices');
    }
};
