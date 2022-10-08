<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDefaultSocialNetworks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('social_networks')->insert([
            [
                'icon_id' => 1,
                'social_order' => '0',
            ],
            [
                'icon_id' => 2,
                'social_order' => '1',
            ],
            [
                'icon_id' => 4,
                'social_order' => '2',
            ],
            [
                'icon_id' => 5,
                'social_order' => '3',
            ],
            [
                'icon_id' => 6,
                'social_order' => '4',
            ],
        ]);


        DB::table('social_network_translations')->insert([
            [
                'social_network_id' => 1,
                'name' => 'فيسبوك',
                'locale' => 'ar',
            ],
            [
                'social_network_id' => 1,
                'name' => 'Facebook',
                'locale' => 'en',
            ],

            [
                'social_network_id' => 2,
                'name' => 'تويتر',
                'locale' => 'ar',
            ],
            [
                'social_network_id' => 2,
                'name' => 'twitter',
                'locale' => 'en',
            ],
            [
                'social_network_id' => 3,
                'name' => 'سكايب',
                'locale' => 'ar',
            ],
            [
                'social_network_id' => 3,
                'name' => 'Skype',
                'locale' => 'en',
            ],
            [
                'social_network_id' => 4,
                'name' => 'لينكد ان',
                'locale' => 'ar',
            ],
            [
                'social_network_id' => 4,
                'name' => 'LinkedIn',
                'locale' => 'en',
            ],
            [
                'social_network_id' => 5,
                'name' => 'واتس اب',
                'locale' => 'ar',
            ],
            [
                'social_network_id' => 5,
                'name' => 'Whatsapp',
                'locale' => 'en',
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
        DB::table('social_network_translations')->truncate();
        DB::table('social_networks')->truncate();
    }
}
