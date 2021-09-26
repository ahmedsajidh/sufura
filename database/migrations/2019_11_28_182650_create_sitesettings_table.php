<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitesettings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sitetitle')->nullable();
            $table->string('logo')->nullable();
            $table->string('fevicon')->nullable();
            $table->string('footerlogo')->nullable();
            $table->string('sitedescription')->nullable();
            $table->integer('number')->nullable();
            $table->string('email')->nullable();
            $table->string('footercopyright')->nullable();

            $table->string('help')->nullable();

            $table->string('fburl')->nullable();




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
        Schema::dropIfExists('sitesettings');
    }
}
