<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('competition_id')
                    ->references('id')
                    ->on('competitions')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->text('title');
            $table->string('position');
            $table->string('organization');
        
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['competition_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competition_translations');
    }
}
