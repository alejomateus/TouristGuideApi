<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->double('latitude');
            $table->double('longitude');
            $table->string('description',3000);
            $table->string('route',3000);
            $table->string('costs',3000);
            $table->string('schedule',3000);
            $table->string('urlMainphoto');
            $table->enum('type',["zoologico","bioparque","jardin botanico"]);
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
        Schema::dropIfExists('places');
    }
}
