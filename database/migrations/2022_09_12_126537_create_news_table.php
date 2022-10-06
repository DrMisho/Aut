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
            $table->id();

            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('news_category_id')->references('id')->on('news_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('news_status_id')->references('id')->on('news_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('image_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('file_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->references('id')->on('cities')->onDelete('cascade');            

            $table->timestamp('publish_at');

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
        Schema::dropIfExists('news');
    }
}
