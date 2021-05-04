<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string("general_description");
            $table->string("property_type");
            $table->string("settlement");
            $table->string("house_number");
            $table->string("floor");
            $table->string("total_floors_in_the_building");
            $table->string("street");
            $table->string("rooms_number");
            $table->string("parking");
            $table->string("balconies");
            $table->string("property_condition");
            $table->string("entry_date");
            $table->string("square_meter");
            $table->string("price");
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
        Schema::dropIfExists('property_descriptions');
    }
}
