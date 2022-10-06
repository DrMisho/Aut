<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tag', function (Blueprint $table) {
            $table->id();

            $table->foreignId('news_id')->references('id')->on('news')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('tag_id')->references('id')->on('news_tags')->onDelete('cascade')->onUpdate('cascade');

            $table->unique(['news_id', 'tag_id']);

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
        Schema::dropIfExists('news_tag');
    }
}
