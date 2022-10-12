<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_says', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->text('say');
            $table->foreignId('file_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('client_says');
    }
}
