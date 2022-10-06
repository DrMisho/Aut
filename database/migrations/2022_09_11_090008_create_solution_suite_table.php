<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionSuiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solution_suite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solution_id')->references('id')->on('solutions')->onDelete('cascade');
            $table->foreignId('suite_id')->references('id')->on('suites')->onDelete('cascade');
            $table->unsignedTinyInteger('show_order');

            $table->timestamps();
            $table->softDeletes();
            $table->unique(['solution_id', 'suite_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solutions_suites');
    }
}
