<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContributionTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribution_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contribution_id')
                    ->references('id')
                    ->on('contributions')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
            $table->unique(['contribution_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contribution_translations');
    }
}
