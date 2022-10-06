<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box_translations', function(Blueprint $table) {
            $table->id();
            $table->foreignId('box_id')
                    ->references('id')
                    ->on('boxes')
                    ->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');

            $table->timestamps();
            $table->softDeletes();
            $table->unique(['box_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('box_translations');
    }
}
