<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->bigInteger('DNI')->unique();
            $table->date('birthdate');
            $table->bigInteger('phone');
            $table->enum('sex', ['man', 'women']);
            $table->unsignedMediumInteger('locations_id');
            $table->foreign('locations_id')->references('id')->on('locations');
            $table->unsignedMediumInteger('vehicles_id')->nullable();
            $table->foreign('vehicles_id')->references('id')->on('vehicles');
            $table->unsignedMediumInteger('professions_id');
            $table->foreign('professions_id')->references('id')->on('professions');
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
        Schema::dropIfExists('peoples');
    }
}
