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
            $table->id();
            $table->foreignId('news_status_id')->references('id')->on('news_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->string('locale')->index();

            $table->string('name');

            $table->softDeletes();
            $table->timestamps();
            $table->unique(['news_status_id', 'locale']);
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
