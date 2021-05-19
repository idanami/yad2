<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('property_list_id')->unsigned();
            $table->string("city");
            $table->string("settlement")->nullable();
            $table->string("street");
            $table->string("house_number");
            $table->string("property_type");
            $table->string("rooms_number");
            $table->integer("floor_number");
            $table->integer("square_meter");
            $table->integer("price");
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
        Schema::dropIfExists('about_properties');
    }
}
