<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('country_code_2');
            $table->string('country_code_3');
            $table->integer('numeric_code');
            $table->integer('country_order');
            $table->bigInteger('area');
            $table->bigInteger('population');
            $table->bigInteger('pop_sqm');
            $table->bigInteger('phone_code');
            $table->bigInteger('mobile_length');
            
            $table->timestamps();
            $table->softDeletes();
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
