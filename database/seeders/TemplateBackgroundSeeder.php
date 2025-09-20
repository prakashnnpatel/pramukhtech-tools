<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CardTemplateBackground;

// php artisan db:seed --class=TemplateBackgroundSeeder
class TemplateBackgroundSeeder extends Seeder
{
    public function run()
    {
        //CardTemplateBackground::truncate();
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
                'image_path' => '/images/greeting-cards/backgrounds/birthday-3.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-4.jpeg',
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
                'image_path' => '/images/greeting-cards/backgrounds/birthday-11.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-12.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-13.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-14.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-15.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-16.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-17.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-18.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-19.jpg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-20.jpeg',
                'category' => 'Birthday',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-21.jpg',
                'category' => 'Birthday',
            ],
        ];
        //dd($bgImages);
        
        foreach ($bgImages as $index => $image) {
            CardTemplateBackground::create($image);
        }
    }
}
