<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialNetworkTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_network_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('social_network_id')->references('id')->on('social_networks')->onDelete('cascade');
            $table->string('locale')->index();

            $table->string('name');
            
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['social_network_id','locale']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_network_translations');
    }
}
