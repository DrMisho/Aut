<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefaultLanguages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('languages')->insert([
            [
                'name' => 'Arabic',
                'code' => 'ar',
                'script' => 'Arab',
                'native' => 'العربية',
                'regional' => 'ar_AE',
                'language_order' => 1,
                'fallback_language' => 'en',
                'dir' => 'ltr',
            ],
            [
                'name' => 'English',
                'code' => 'en',
                'script' => 'Latn',
                'native' => 'English',
                'regional' => 'en_GB',
                'language_order' => 2,
                'fallback_language' => 'ar',
                'dir' => 'rtl',
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
        DB::table('languages')->truncate();
    }
}
