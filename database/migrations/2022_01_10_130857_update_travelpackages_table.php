<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTravelpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Schema::table('travelpackages', function (Blueprint $table) {
        Schema::create('travelpackages', function (Blueprint $table) {
            $table->bigIncrements('tp_id'); #auto increment field
            $table->string('tp_name');#string field
            $table->enum('tp_locations', config('_countriesArray'));//enum field with options all countries in config/_countryesArray.php
            $table->float('tp_price');#float field
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
        Schema::drop('travelpackages');
    }
}
