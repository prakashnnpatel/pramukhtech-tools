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
                'title' => 'Anniversary Roses',
                'slug' => 'anniversary-roses',
                'thumbnail' => '/images/greeting-cards/roses-thumb.png',
                'category' => 'Anniversary',
                'description' => 'Elegant anniversary card with roses.',
                'template_data' => json_encode([
                    'bgColor' => '#fff0f6',
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Happy Anniversary',
                            'css' => 'top: 50px; left: 160px; color: #d81b60; font-size: 30px; font-weight: bold;',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/roses.png',
                            'css' => 'top: 140px; left: 120px; max-width: 360px; max-height: 180px;',
                        ]
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Thank You Floral',
                'slug' => 'thank-you-floral',
                'thumbnail' => '/images/greeting-cards/floral-thumb.png',
                'category' => 'Thank You',
                'description' => 'A floral thank you card.',
                'template_data' => json_encode([
                    'bgColor' => '#f1f8e9',
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Thank You!',
                            'css' => 'top: 60px; left: 200px; color: #388e3c; font-size: 28px; font-weight: bold;',
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/floral.png',
                            'css' => 'top: 130px; left: 130px; max-width: 340px; max-height: 170px;',
                        ]
                    ]
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
