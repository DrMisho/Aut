<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuiteTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suite_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('suite_id')
                    ->references('id')
                    ->on('suites')
                    ->onDelete('cascade');
            $table->string('locale')->index();

            $table->string('name');       
            $table->string('long_name');
            $table->text('vision');
            
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['suite_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suite_translations');
    }
}
