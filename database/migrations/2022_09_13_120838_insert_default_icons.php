<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefaultIcons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('icons')->insert([
            [
                'code' => 'fab fa-facebook',
            ],
            [
                'code' => 'fab fa-twitter',
            ],
            [
                'code' => 'fab fa-google-plus',
            ],
            [
                'code' => 'fab fa-skype',
            ],
            [
                'code' => 'fab fa-linkedin-in',
            ],
            [
                'code' => 'fab fa-whatsapp-square',
            ],
            [
                'code' => 'fab fa-telegram',
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
        DB::table('icons')->truncate();
    }
}
