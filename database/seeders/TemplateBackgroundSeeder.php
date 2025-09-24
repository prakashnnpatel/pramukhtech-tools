<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CardTemplateBackground;

// php artisan db:seed --class=TemplateBackgroundSeeder
class TemplateBackgroundSeeder extends Seeder
{
    public function run()
    {
        CardTemplateBackground::truncate();
        $bgImages = [
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-1.jpeg',
                //'thumbnail_path' => '/images/greeting-cards/backgrounds/birthday-1-thumb.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-2.jpg',                
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-3.jpg',
                'category' => 'Birthday',
            ],
           
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-4.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-5.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-6.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-7.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-8.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-9.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-10.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-11.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-1.jpg',
                'category' => 'Festival',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-2.jpg',
                'category' => 'Festival',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-3.jpg',
                'category' => 'Festival',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-4.jpg',
                'category' => 'Festival',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-5.jpg',
                'category' => 'Festival',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-6.jpg',
                'category' => 'Festival',
            ],

        ];
        //dd($bgImages);
        
        foreach ($bgImages as $index => $image) {
            CardTemplateBackground::create($image);
        }
    }
}
