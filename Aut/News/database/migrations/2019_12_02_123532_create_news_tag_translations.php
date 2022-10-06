<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTagTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tag_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_tag_id')->index();
            $table->string('name');
            $table->string('locale')->index();
            $table->unique(['news_tag_id','locale']);
            $table->foreign('news_tag_id')->references('id')->on('news_tags')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('news_tag_translations');
    }
}
