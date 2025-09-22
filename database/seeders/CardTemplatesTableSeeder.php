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
                'thumbnail' => '/images/greeting-cards/balloons-thumb.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '#e3f2fd',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-2.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday!',
                            'css' => 'top: 40px; left: 180px; color: #1976d2; font-size: 32px; font-weight: bold;',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/balloons.png',
                            'css' => 'top: 120px; left: 14a0px; max-width: 400px; max-height: 200px; margin-left:100px;',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/balloons.png',
                            'css' => 'top: 140px; left: 16a0px; max-width: 400px; max-height: 200px; margin-left:250px;',
                        ]
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Birthday Balloons 1',
                'slug' => 'birthday-balloons-1',
                'thumbnail' => '/images/greeting-cards/birthday-balloons-thumb-1.png',
                'category' => 'Birthday',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '#e3f2fd',
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
        ]);
    }
}
