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
                'title' => 'Balloon Bloom',
                'slug' => 'balloon-bloom',
                'thumbnail' => '/images/greeting-cards/balloon-bloom-thumb.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-5.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => 'z-index: 30;left: 173px;top: 225px;font-family: "Abril Fatface", sans-serif;font-size: 30px; color: rgb(175, 49, 49);',
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Any Good Name here',
                            'css' => 'z-index: 31;left: 205px;top: 289px;font-size: 15px; color: rgb(5, 5, 5); font: Lobster, sans-serif;',
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
                'title' => 'Birthday Bliss',
                'slug' => 'birthday-bliss',
                'thumbnail' => '/images/greeting-cards/birthday-bliss-thumb.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-4.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => 'z-index: 21; left: 318px; top: 194px; font-family: Lobster, sans-serif; font-size: 30px; color: rgb(199, 10, 92);',
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Add Name Here',
                            'css' => 'z-index: 50; left: 348px; top: 239px; font-family: Pacifico, sans-serif; font-size: 25px; font-weight: bold; color:rgb(109, 70, 94);',
                        ],                       
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-3.jpeg',
                            'css' => 'position: absolute; top: 30px; left: 275px; width: 133px; height: 142.533px; border:10px groove rgb(232, 166, 166); cursor: move; z-index: 51; clip-path: none;',
                        ],                        
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/g-user-3.jpeg',
                            'css' => 'position: absolute; top: 149px; left: 171px; width: 124px; height: 136.15px; border: 10px groove rgb(217, 145, 194); cursor: move; z-index: 41; clip-path: none; ',
                        ],                         
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Birthday Delight',
                'slug' => 'birthday-delight',
                'thumbnail' => '/images/greeting-cards/birthday-delight-thumb.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-3.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => 'z-index: 27; left: 25px; top: 40px; font-family: Pacifico, sans-serif; font-size: 30px; color: #E94B6D',
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Any Good Name here',
                            'css' => 'z-index: 29; left: 53px; top: 273px; font-size: 18px;',
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'May your day be filled with smiles, laughter, and the warmth of those who love you most.',
                            'css' => 'z-index: 15; left: 10px; top: 322px; font-size: 16px; font-style: italic; color: rgb(185, 80, 80); font-family: Georgia, sans-serif; width:60%;',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-6.png',
                            'css' => 'position: absolute; top: 100px; left: 63px; width: 170px; height: 170px; border: 5px solid rgb(140, 120, 120); cursor: move; z-index: 28; border-radius: 50%;',
                        ],                        
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Joyful Moments',
                'slug' => 'joyful-moments',
                'thumbnail' => '/images/greeting-cards/joyful-moments-thumb.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-6.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => 'z-index: 123; left: 256px; top: 84px; font-family: Lobster, sans-serif; font-size: 27px; color: rgb(54, 68, 140); transform: rotate(-6.53199deg);',
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Any Good Name here',
                            'css' => 'z-index: 3;left: 174px;top: 294px;font-size: 18px;font-style: italic;border-color: rgb(191, 196, 223);border-width: 3px;border-style: none;background-color: rgb(216, 218, 233);',
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Wishing you a very happy birthday filled with love and laughter.',
                            'css' => 'z-index: 124; left: 172px; top: 342px; font-size: 16px; font-style: italic; color: rgb(185, 80, 80); font-family: Georgia, sans-serif; width: 60%;',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/kid-2.png',
                            'css' => 'position: absolute;top: 91px;left: 128px;width: 131.986px;height: 131.986px;border: 5px solid rgb(140, 120, 120);cursor: move;z-index: 37;transform: rotate(-6.68235deg);',
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/kid-1.png',
                            'css' => 'position: absolute;top: 151px;left: 253px;width: 126px;height: 115.623px;border: 5px double rgb(165, 126, 151);cursor: move;z-index: 38;transform: rotate(-6.90027deg);',
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/kid-3.png',
                            'css' => 'position: absolute;top: 205px;left: 372px;width: 139.995px;height: 124.085px;border: 2px outset rgb(209, 128, 128);cursor: move;z-index: 21;transform: rotate(-7.87307deg);',
                        ],                        
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
