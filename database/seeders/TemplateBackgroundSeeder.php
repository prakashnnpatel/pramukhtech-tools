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
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-2.jpg',                
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-3.jpg',
                'category' => 'Birthday, New Baby',
            ],
           
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-4.jpg',
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-5.jpg',
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-6.jpg',
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-7.jpg',
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-8.jpg',
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-9.jpg',
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-10.jpg',
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/birthday-11.jpg',
                'category' => 'Birthday, New Baby',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-1.jpg',
                'category' => 'Festival, New Year, Diwali, Holi, Religious, Spiritual',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-2.jpg',
                'category' => 'Festival, New Year, Diwali, Holi, Religious, Spiritual',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-3.jpg',
                'category' => 'Festival, New Year, Diwali, Holi, Religious, Spiritual',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-4.jpg',
                'category' => 'Festival, New Year, Diwali, Holi, Religious, Spiritual',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-5.jpg',
                'category' => 'Festival, New Year, Diwali, Holi, Religious, Spiritual',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/festival-6.jpg',
                'category' => 'Festival, New Year, Diwali, Holi, Religious, Spiritual',
            ], 
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-1.jpg',
                'category' => 'All',
            ], 
             [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-2.jpg',
                'category' => 'All',
            ],           
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-3.png',
                'category' => 'All',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-4.jpg',
                'category' => 'All',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-5.jpg',
                'category' => 'All',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-6.jpg',
                'category' => 'All',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-7.png',
                'category' => 'All',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-8.png',
                'category' => 'All',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-9.png',
                'category' => 'All',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/all-10.png',
                'category' => 'All',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-1.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-2.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-3.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-4.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-5.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-6.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-7.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-8.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-9.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-10.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-11.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-12.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-13.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-14.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-15.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-16.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-17.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-18.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-19.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-20.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/anniversary-1.jpeg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/anniversary-2.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/anniversary-3.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-21.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-22.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-23.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-24.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-25.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-26.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-27.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],            
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/love-28.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/christmas-1.jpg',
                'category' => 'Love, Christmas',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/christmas-2.jpg',
                'category' => 'Love, Christmas',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/christmas-3.jpg',
                'category' => 'Love, Christmas',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/christmas-4.png',
                'category' => 'Love, Christmas',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/visitor-1.jpg',
                'category' => 'Visiting Card, Business',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/visitor-2.jpg',
                'category' => 'Visiting Card, Business',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/visitor-3.jpg',
                'category' => 'Visiting Card, Business',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/visitor-4.png',
                'category' => 'Visiting Card, Business',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/visitor-5.jpg',
                'category' => 'Visiting Card, Business',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/border-1.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/border-2.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],
            [
                'title' => '',
                'image_path' => '/images/greeting-cards/backgrounds/border-3.jpg',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
            ],           
        ];
        //dd($bgImages);
        
        foreach ($bgImages as $index => $image) {
            CardTemplateBackground::create($image);
        }
    }
}
