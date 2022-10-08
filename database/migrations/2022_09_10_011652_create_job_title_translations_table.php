<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTitleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_title_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_title_id')->references('id')->on('job_titles')->onDelete('cascade');            $table->string('locale')->index();

            $table->string('name');

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['job_title_id','locale']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_title_translations');
    }
}
