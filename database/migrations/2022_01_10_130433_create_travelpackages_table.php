<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TravelPackages', function (Blueprint $table) {
            $table->bigIncrements('tp_id'); #auto increment field
            $table->string('tp_name');#string field
            $table->string('tp_locations');#enum field with options all countries in config/_countryesArray.php
            $table->float('tp_price');#float field
            $table->string('tp_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TravelPackages');
    }
}
