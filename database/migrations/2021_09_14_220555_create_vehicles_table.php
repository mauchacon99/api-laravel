<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->smallInteger('year')->nullable();
            $table->unsignedMediumInteger('vehicle_types_id');
            $table->foreign('vehicle_types_id')->references('id')->on('vehicle_types');
            $table->unsignedMediumInteger('vehicle_brands_id');
            $table->foreign('vehicle_brands_id')->references('id')->on('vehicle_brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
