<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefaultGenders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('genders')->insert([
            [
                'code' => 'm',
            ],
            [
                'code' => 'f',
            ],
        ]);


        DB::table('gender_translations')->insert([
            [
                'gender_id' => 1,
                'name' => 'Male',
                'locale' => 'en',
            ],
            [
                'gender_id' => 1,
                'name' => 'ذكر',
                'locale' => 'ar',
            ],
            [
                'gender_id' => 2,
                'name' => 'Female',
                'locale' => 'en',
            ],
            [
                'gender_id' => 2,
                'name' => 'انثى',
                'locale' => 'ar',
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
        DB::table('gender_translations')->truncate();
        DB::table('genders')->truncate();
    }
}
