<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')
                    ->references('id')
                    ->on('modules')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->string('name');
            $table->text('description');

            $table->timestamps();
            $table->softDeletes();
            $table->unique(['module_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_translations');
    }
}
