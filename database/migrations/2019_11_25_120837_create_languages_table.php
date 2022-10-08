<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code', 50);
            $table->string('script');
            $table->string('native');
            $table->string('regional');
            $table->string('font_url')->nullable();
            $table->string('font_family')->nullable();
            $table->string('language_family', 50)->nullable();
            $table->string('fallback_language', 50);
            $table->enum('dir', \Aut\GlobalSettings\Models\Language::DIR)->nullable();
            $table->unsignedInteger('language_order');
            $table->string('cl_639_1', 50)->nullable();
            $table->string('cl_639_2_t', 50)->nullable();
            $table->string('cl_639_2_b', 50)->nullable();
            $table->string('cl_639_3', 50)->nullable();
            $table->string('cl_639_6', 50)->nullable();

            $table->foreignId('flag_id')->nullable();

            $table->deactivate();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('flag_id')->references('id')->on('files')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
