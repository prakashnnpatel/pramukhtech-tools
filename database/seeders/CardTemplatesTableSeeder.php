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
                            'css' => 'position: absolute;top: 31px;left: 184px;width: 200px;height: 190px;border: 1px solid rgb(136, 136, 136);cursor: move;z-index: 28; border-radius: 50%;',
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
                            'text' => 'Add Good Name here',
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
                            'css' => 'position: absolute; top: 151px; left: 253px; width: 126px; height: 115.623px; border: 5px double rgb(165, 126, 151); cursor: move; z-index: 8; transform: rotate(-6.90027deg); border-radius: 50%',
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
            [
                'title' => 'Celebration Glow',
                'slug' => 'celebration-glow',
                'thumbnail' => '/images/greeting-cards/celebration-glow-thumb.png',
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
                            'css' => 'z-index: 36; left: 190px; top: 134px; font-family: Lobster, sans-serif; font-size: 38px; color: rgb(255, 255, 255); transform: rotate(-0.320775deg); background: linear-gradient(90deg, rgb(93 202 85) 0%, rgb(14 68 39) 100%);',
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Friend Name',
                            'css' => 'z-index: 47; left: 212px; top: 216px; color: #000000;font-family: Lobster, sans-serif; font-size: 35px;',
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Have a Wonderful Day',
                            'css' => 'z-index: 47; left: 198px; top: 322px; color: rgb(6, 127, 58); font-weight: bold;',
                        ],
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Twins Birthday',
                'slug' => 'twins-birthday',
                'thumbnail' => '/images/greeting-cards/twins-birthday-thumb.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-9.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => 'z-index: 62; left: 54px; top: 328px; font-family: Lobster, sans-serif; font-size: 36px; color: rgb(49, 66, 10); transform: rotate(-0.320775deg);',
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Vansh',
                            'css' => 'z-index: 64; left: 164px; top: 215px; color: rgb(108, 121, 42); font-family: Lobster, sans-serif; font-size: 35px; transform: rotate(-0.165558deg);',
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Ved',
                            'css' => 'z-index: 65; left: 364px; top: 128px; color: rgb(108, 121, 42); font-family: Lobster, sans-serif; font-size: 35px;',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/kid-2.png',
                            'css' => 'position: absolute; top: 36px; left: 127px; width: 186.993px; height: 173.925px; border: 4px solid rgb(221, 169, 120); cursor: move; z-index: 66; border-radius: 50%; transform: rotate(-0.217921deg);',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/kid-1.png',
                            'css' => 'position: absolute; top: 197px; left: 313px; width: 190.988px; height: 173.602px; border: 5px solid rgb(174, 163, 163); cursor: move; z-index: 56; border-radius: 50%; transform: rotate(-0.667781deg);',
                        ],
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
