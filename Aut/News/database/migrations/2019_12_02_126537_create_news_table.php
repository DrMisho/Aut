<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Aut\VueDataTable\Builders\BelongsTo;
class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('news_category_id')->index();
            $table->unsignedBigInteger('news_status_id')->index();
            $table->unsignedInteger('image_id')->index()->nullable();
            $table->unsignedInteger('file_id')->index()->nullable();

            $table->timestamp('publish_at');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('image_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('news_status_id')->references('id')->on('news_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('news_category_id')->references('id')->on('news_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
