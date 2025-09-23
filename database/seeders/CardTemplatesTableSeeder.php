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
                'title' => 'Birthday Balloons',
                'slug' => 'birthday-balloons',
                'thumbnail' => '/images/greeting-cards/birthday-balloons-thumb-1.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-11.jpg",
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
                            'src' => '/images/greeting-cards/element/g-user-2.jpeg',
                            'css' => 'position: absolute;top: 70px;left: 184px;width: 200px;height: 150px;border: 1px solid rgb(136, 136, 136);cursor: move;z-index: 28;clip-path: circle(40% at 50% 50%);',
                        ],                        
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Birthday Framing',
                'slug' => 'birthday-framing',
                'thumbnail' => '/images/greeting-cards/birthday-balloons-thumb-2.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-13.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => 'z-index: 21; left: 318px; top: 194px; font-family: Lobster, sans-serif; font-size: 30px; color: rgb(0, 0, 255);',
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Beautiful',
                            'css' => 'z-index: 50; left: 348px; top: 239px; font-family: Pacifico, sans-serif; font-size: 30px; font-weight: bold;',
                        ],                       
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-3.jpeg',
                            'css' => 'position: absolute; top: 30px; left: 275px; width: 133px; height: 142.533px; border: 8px groove rgb(255, 255, 255); cursor: move; z-index: 51; clip-path: none;',
                        ],                        
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/g-user-3.jpeg',
                            'css' => 'position: absolute; top: 123px; left: 159px; width: 124px; height: 136.15px; border: 8px groove rgb(255, 255, 255); cursor: move; z-index: 41; clip-path: none;',
                        ],                         
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
