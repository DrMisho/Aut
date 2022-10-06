<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')
                    ->references('id')->on('teams')
                    ->onDelete('cascade');

            $table->enum('location_type', array('L', 'I'));
            $table->string('year');
            $table->unsignedTinyInteger('show_order');
            $table->foreignId('image_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->references('id')->on('cities')->onDelete('cascade');
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
        Schema::dropIfExists('competitions');
    }
}

