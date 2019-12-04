<?php

use Illuminate\Database\Seeder;
use App\SocialNetwork;
class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('social_networks')->insert(
            
            $social=[
        [
            'name' => 'twitter',
            'link' => 'https://twitter.com/Tiny_Coders',
            'status' => '1',
        ],
        [
            'name' => 'instagram',
            'link' => 'https://www.instagram.com/tinycoders/',
            'status' => '1',
        ],
        [
            'name' => 'email',
            'link' => 'mailto:tinycoders@gmail.com',
            'status' => '1',
        ],
        [
            'name' => 'youtube',
            'link' => 'https://www.youtube.com/channel/UC_Fk66l7BAixLzhISXayv6w',
            'status' => '1',
        ],
        [
            'name' => 'whatsapp',
            'link' => '',
            'status' => '0',
        ],
        [
            'name' => 'snapchat',
            'link' => '',
            'status' => '0',
        ],
    ];

    foreach ($social as $item) {
        SocialNetwork::create($item);
    }
    }
}
