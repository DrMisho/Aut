<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solution_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solution_id')
                    ->references('id')
                    ->on('solutions')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
            $table->unique(['solution_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solution_translations');
    }
}
