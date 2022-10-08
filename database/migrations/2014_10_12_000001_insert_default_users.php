<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefaultUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('users')->insert([
            [
                'username' => 'aut405',
                'email' => 'aut405@automata4.com',
                'password' => '$2y$10$F3HPSZjYwx2jXPXd8avDzu5P7DSIPrCkawOhsuXIHsWom5vASuSSO',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->truncate();
    }
}
