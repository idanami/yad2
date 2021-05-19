<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralDescriptionOfPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_description_of_properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('property_list_id')->unsigned();
            $table->string("general_description");
            $table->string("property_condition");
            $table->integer("total_floors_in_the_building");
            $table->integer("parking");
            $table->string("entry_date");
            $table->integer("balconies");
            $table->timestamps();
            $table->foreign('property_list_id')->references('id')->on('property_lists')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_description_of_properties');
    }
}
