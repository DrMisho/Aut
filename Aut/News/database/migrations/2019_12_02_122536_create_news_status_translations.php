<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsStatusTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_status_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_status_id')->index();
            $table->string('name');
            $table->string('locale')->index();
            $table->unique(['news_status_id', 'locale']);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('news_status_id')->references('id')->on('news_statuses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_status_translations');
    }
}
