<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\CardTemplates;

// php artisan db:seed --class=CardTemplatesTableSeeder
class CardTemplatesTableSeeder extends Seeder
{
    public function run()
    {
        CardTemplates::truncate();
        DB::table('card_templates')->insert([
           [
                'title' => 'Birthday Balloons 1',
                'slug' => 'birthday-balloons-1',
                'thumbnail' => '/images/greeting-cards/birthday-balloons-thumb-1.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-25.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => 'z-index: 30;left: 173px;top: 225px;font-family: "Abril Fatface", sans-serif;font-size: 30px;',
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Wish You all The Best !!',
                            'css' => 'z-index: 31;left: 193px;top: 289px;font-size: 15px;',
                        ],                       
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/d-user.jpeg',
                            'css' => 'position: absolute;top: 70px;left: 184px;width: 200px;height: 150px;border: 1px solid rgb(136, 136, 136);cursor: move;z-index: 28;clip-path: circle(40% at 50% 50%);',
                        ],                        
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Birthday Balloons 2',
                'slug' => 'birthday-balloons-2',
                'thumbnail' => '/images/greeting-cards/birthday-balloons-thumb-2.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-26.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => 'z-index: 48;left: 205px;top: 243px;font-family: Lato, sans-serif;font-weight: bold;font-size: 24px;color: rgb(64, 0, 64);',
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Prakash Patel',
                            'css' => 'z-index: 49;left: 222px;top: 284px;color: rgb(14, 14, 14);font-weight: bold;font-family: Lato, sans-serif;',
                        ],                       
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/d-user.jpeg',
                            'css' => 'position: absolute;top: 90px;left: 189px;width: 200px;height: 150px;border: 2px dashed rgb(0, 0, 0);cursor: move;z-index: 47;clip-path: circle(40% at 50% 50%);',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/cake-1.png',
                            'css' => 'position: absolute;top: 296px;left: 133px;width: 84px;height: 63.2353px;border: 1px rgb(0, 0, 0);cursor: move;z-index: 50;',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/cake-1.png',
                            'css' => 'position: absolute;top: 294px;left: 357px;width: 97px;height: 73.0691px;border: 1px rgb(0, 0, 0);cursor: move;z-index: 44;',
                        ],                         
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
