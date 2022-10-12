<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('website')->nullable();
            $table->unsignedTinyInteger('show_order');
            $table->foreignId('logo_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('country_id')
                    ->references('id')->on('countries')
                    ->onDelete('cascade');

            $table->foreignId('testimonial_id')
                    ->nullable()
                    ->references('id')
                    ->on('files')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreignId('suite_id')
                    ->nullable()->references('id')->on('suites')
                    ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();

            
            
            

        });
    }
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}