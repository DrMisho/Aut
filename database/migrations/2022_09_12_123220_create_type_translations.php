<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_type_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_type_id')->index();
            $table->string('name');
            $table->string('locale')->index();
            $table->unique(['news_type_id','locale']);
            $table->foreign('news_type_id')->references('id')->on('news_types')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('news_type_translations');
    }
}
