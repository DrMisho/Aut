<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')
                    ->references('id')
                    ->on('clients')
                    ->onDelete('cascade');
            $table->string('locale')->index();
            $table->string('name');
            
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['client_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_translations');
    }
}
