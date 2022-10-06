<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->foreignId('image_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('logo_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('country_id')
                    ->references('id')
                    ->on('countries');
                    
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
        Schema::dropIfExists('branches');
    }
}
