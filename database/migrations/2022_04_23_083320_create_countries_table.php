<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('countryName');
            $table->string('capital');
            $table->bigInteger('population');
            $table->double('area');
            $table->double('popDensity');
            $table->longText('history');
            $table->longText('culture');
            $table->longText('food');
            $table->longText('tourism');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('continentID');
            $table->unsignedBigInteger('languageID');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('continentID')->references('id')->on('continents');
            $table->foreign('languageID')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
