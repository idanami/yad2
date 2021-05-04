<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_conditions', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('property_descriptions_id')->unsigned();
            $table->boolean('air_conditioning')->default(false);
            $table->boolean('bars')->default(false);
            $table->boolean('elevators')->default(false);
            $table->boolean('kosher_kitchen')->default(false);
            $table->boolean('access_for_disabled')->default(false);
            $table->boolean('renovated')->default(false);
            $table->boolean('mamad')->default(false);
            $table->boolean('Storage')->default(false);
            $table->boolean('pandor_doors')->default(false);
            $table->boolean('tadiran_air_conditioner')->default(false);
            $table->boolean('Furniture')->default(false);
            $table->timestamps();
            // $table->foreign('property_descriptions_id')->references('id')->on('property_descriptions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_conditions');
    }
}
