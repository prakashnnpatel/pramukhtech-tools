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
                'title' => 'New Blank Card',
                'slug' => 'new-blank-card',
                'thumbnail' => '/images/greeting-cards/new-blank-card-thumb.png',
                'category' => 'All',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                ]),
                'seo_title' => "Create your Own - Free Editable Card Template | ToolHubSpot",
                "seo_description" => "Create personalized greeting cards online with our free editable card templates. Customize text, images, and colors to make your own unique card for any occasion at ToolHubSpot.",
                "seo_keywords" => "Greeting card maker online, free editable greeting cards, personalized card templates, custom greeting card, greeting card with photo and text, create greeting card online free, printable greeting cards editable, greeting card background editor, greeting wishes card design free, greeting card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Balloon Bloom',
                'slug' => 'balloon-bloom',
                'thumbnail' => '/images/greeting-cards/balloon-bloom-thumb.png',
                'category' => 'Birthday, New Baby',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-5.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => json_encode([
                              'desktop' => 'z-index: 30;left: 173px;top: 225px;font-family: "Abril Fatface", sans-serif;font-size: 30px; color: rgb(175, 49, 49);',
                              'mobile'  => 'z-index: 30; width: 100%; text-align: center; top: 225px;font-family: "Abril Fatface", sans-serif;font-size: 30px; color: rgb(175, 49, 49);',
                            ]),
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Any Good Name here',
                            'css' => json_encode([
                                'desktop' => 'z-index: 31;left: 205px;top: 289px;font-size: 15px; color: rgb(5, 5, 5); font: Lobster, sans-serif;', 
                                'mobile'  => 'z-index: 31; width: 100%; text-align: center; top: 289px;font-size: 15px; color: rgb(5, 5, 5); font: Lobster, sans-serif;',
                            ]),
                        ],                       
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 39px; left: 194px; width: 200px; height: 190px; border: 10px solid rgb(209, 153, 153); cursor: move; z-index: 12; transform: rotate(9.52304deg); border-radius: 50%;',
                                'mobile'  => 'position: absolute; top: 39px; left: 50%; width: 200px; height: 190px; border: 10px solid rgb(209, 153, 153); cursor: move; z-index: 12; transform: translateX(-50%) rotate(9.52304deg); border-radius: 50%;',
                            ]),
                        ],                        
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Birthday Card Template | ToolHubSpot",
                "seo_description" => "Create and personalize this {title} birthday card online. Add your own text, images, and colors. Free editable birthday greeting card template at ToolHubSpot.",
                "seo_keywords" => "birthday card maker online, free editable birthday cards, personalized birthday card templates, custom birthday greeting card, birthday card with photo and text, create birthday card online free, printable birthday cards editable, birthday card background editor, birthday wishes card design free, birthday card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Birthday Bliss',
                'slug' => 'birthday-bliss',
                'thumbnail' => '/images/greeting-cards/birthday-bliss-thumb.png',
                'category' => 'Birthday, New Baby',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-4.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => json_encode([
                                'desktop' => 'z-index: 21; left: 318px; top: 194px; font-family: Lobster, sans-serif; font-size: 30px; color: rgb(199, 10, 92);',
                                'mobile' => 'z-index: 21; left: 55%; top: 194px; font-family: Lobster, sans-serif; font-size: 30px; color: rgb(199, 10, 92);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Add Name Here',
                            'css' => json_encode([
                                'desktop' => 'z-index: 50; left: 348px; top: 239px; font-family: Pacifico, sans-serif; font-size: 25px; font-weight: bold; color:rgb(109, 70, 94);',
                                'mobile' => 'z-index: 50; width: 100%; text-align: center; top: 285px; font-family: Pacifico, sans-serif; font-size: 25px; font-weight: bold; color:rgb(109, 70, 94);'
                            ]),
                        ],                       
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-3.jpeg',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 30px; left: 275px; width: 133px; height: 142.533px; border:10px groove rgb(232, 166, 166); cursor: move; z-index: 51; clip-path: none;',
                                'mobile' => 'position: absolute; top: 10%; left: 40%; width: 133px; height: 142.533px; border:10px groove rgb(232, 166, 166); cursor: move; z-index: 51; clip-path: none;'
                            ]),
                        ],                        
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/g-user-3.jpeg',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 149px; left: 171px; width: 124px; height: 136.15px; border: 10px groove rgb(217, 145, 194); cursor: move; z-index: 41; clip-path: none;', 
                                'mobile' => 'position: absolute; top: 149px; left: 10%; width: 124px; height: 136.15px; border: 10px groove rgb(217, 145, 194); cursor: move; z-index: 41; clip-path: none;'
                            ]),
                        ],                         
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Birthday Card Template | ToolHubSpot",
                "seo_description" => "Create and personalize this {title} birthday card online. Add your own text, images, and colors. Free editable birthday greeting card template at ToolHubSpot.",
                "seo_keywords" => "birthday card maker online, free editable birthday cards, personalized birthday card templates, custom birthday greeting card, birthday card with photo and text, create birthday card online free, printable birthday cards editable, birthday card background editor, birthday wishes card design free, birthday card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Birthday Delight',
                'slug' => 'birthday-delight',
                'thumbnail' => '/images/greeting-cards/birthday-delight-thumb.png',
                'category' => 'Birthday, New Baby',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-3.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => json_encode([
                                'desktop' => 'z-index: 27; left:25px; top: 40px; font-family: Pacifico, sans-serif; font-size: 30px; color: #E94B6D',
                                'mobile' => 'z-index: 27; width: 100%; text-align: center; top: 40px; font-family: Pacifico, sans-serif; font-size: 30px; color: #E94B6D'
                            ]),
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Any Good Name here',
                            'css' => json_encode([
                                'desktop' => 'z-index: 29; left: 53px; top: 273px; font-size: 18px;',
                                'mobile' => 'z-index: 29; width: 100%; text-align: center; top: 273px; font-size: 18px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'May your day be filled with smiles, laughter, and the warmth of those who love you most.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 15; left: 10px; top: 322px; font-size: 16px; font-style: italic; color: rgb(185, 80, 80); font-family: Georgia, sans-serif; width:60%;',
                                'mobile' => 'z-index: 15; width: 100%; text-align: center; top: 322px; font-size: 16px; font-style: italic; color: rgb(185, 80, 80); font-family: Georgia, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-6.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 100px; left: 63px; width: 170px; height: 170px; border: 5px solid rgb(140, 120, 120); cursor: move; z-index: 28; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 100px; left: 50%; transform: translateX(-50%); width: 170px; height: 170px; border: 5px solid rgb(140, 120, 120); cursor: move; z-index: 28; border-radius: 50%;'
                            ]),
                        ],
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Birthday Card Template | ToolHubSpot",
                "seo_description" => "Create and personalize this {title} birthday card online. Add your own text, images, and colors. Free editable birthday greeting card template at ToolHubSpot.",
                "seo_keywords" => "birthday card maker online, free editable birthday cards, personalized birthday card templates, custom birthday greeting card, birthday card with photo and text, create birthday card online free, printable birthday cards editable, birthday card background editor, birthday wishes card design free, birthday card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Joyful Moments',
                'slug' => 'joyful-moments',
                'thumbnail' => '/images/greeting-cards/joyful-moments-thumb.png',
                'category' => 'Birthday, New Baby',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-6.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => json_encode([
                                'desktop' => 'z-index: 123; left: 256px; top: 84px; font-family: Lobster, sans-serif; font-size: 27px; color: rgb(54, 68, 140); transform: rotate(-6.53199deg);',
                                'mobile' => 'z-index: 123; left: 60%; top: 84px; font-family: Lobster, sans-serif; font-size: 27px; color: rgb(54, 68, 140); transform: rotate(-6.53199deg);'
                            ]),
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Add Name',
                            'css' => json_encode([
                                'desktop' => 'z-index: 3;left: 174px;top: 294px;font-size: 18px;font-style: italic;border-color: rgb(191, 196, 223);border-width: 3px;border-style: none;background-color: rgb(216, 218, 233);',
                                'mobile' => 'z-index: 3;left: 17%;top: 294px;font-size: 18px;font-style: italic;border-color: rgb(191, 196, 223);border-width: 3px;border-style: none;background-color: rgb(216, 218, 233);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Wishing you a very happy birthday filled with love and laughter.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 124; left: 172px; top: 342px; font-size: 16px; font-style: italic; color: rgb(185, 80, 80); font-family: Georgia, sans-serif; width: 60%;',
                                'mobile' => 'z-index: 124; left: 15%; top: 342px; font-size: 16px; font-style: italic; color: rgb(185, 80, 80); font-family: Georgia, sans-serif; width: 90%;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/kid-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute;top: 91px;left: 128px;width: 131.986px;height: 131.986px;border: 5px solid rgb(140, 120, 120);cursor: move;z-index: 37;transform: rotate(-6.68235deg);',
                                'mobile' => 'position: absolute;top: 10%;left: 10%;width: 131.986px;height: 131.986px;border: 5px solid rgb(140, 120, 120);cursor: move;z-index: 37;transform: rotate(-6.68235deg);'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/kid-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 151px; left: 253px; width: 126px; height: 115.623px; border: 5px double rgb(165, 126, 151); cursor: move; z-index: 8; transform: rotate(-6.90027deg); border-radius: 50%',
                                'mobile' => 'position: absolute; top: 151px; left: 35%; width: 126px; height: 115.623px; border: 5px double rgb(165, 126, 151); cursor: move; z-index: 8; transform: rotate(-6.90027deg); border-radius: 50%'
                            ]),
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/kid-3.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute;top: 205px;left: 372px;width: 139.995px;height: 124.085px;border: 2px outset rgb(209, 128, 128);cursor: move;z-index: 21;transform: rotate(-7.87307deg);',
                                'mobile' => 'position: absolute;top: 58%;left: 55%;width: 139.995px;height: 124.085px;border: 2px outset rgb(209, 128, 128);cursor: move;z-index: 21;transform: rotate(-7.87307deg);'
                            ]),
                        ],                        
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Birthday Card Template | ToolHubSpot",
                "seo_description" => "Create and personalize this {title} birthday card online. Add your own text, images, and colors. Free editable birthday greeting card template at ToolHubSpot.",
                "seo_keywords" => "birthday card maker online, free editable birthday cards, personalized birthday card templates, custom birthday greeting card, birthday card with photo and text, create birthday card online free, printable birthday cards editable, birthday card background editor, birthday wishes card design free, birthday card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Celebration Glow',
                'slug' => 'celebration-glow',
                'thumbnail' => '/images/greeting-cards/celebration-glow-thumb.png',
                'category' => 'Birthday, New Baby',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-11.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => json_encode([
                                'desktop' => 'z-index: 36; left: 190px; top: 134px; font-family: Lobster, sans-serif; font-size: 38px; color: rgb(255, 255, 255); transform: rotate(-0.320775deg); background: linear-gradient(90deg, rgb(93 202 85) 0%, rgb(14 68 39) 100%);',
                                'mobile' => 'z-index: 36; width: 100%; text-align: center; top: 134px; font-family: Lobster, sans-serif; font-size: 38px; color: rgb(255, 255, 255); transform: rotate(-0.320775deg); background: linear-gradient(90deg, rgb(93 202 85) 0%, rgb(14 68 39) 100%);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Friend Name',
                            'css' => json_encode([
                                'desktop' => 'z-index: 47; left: 212px; top: 216px; color: #000000;font-family: Lobster, sans-serif; font-size: 35px;',
                                'mobile' => 'z-index: 47; width: 100%; text-align: center; top: 216px; color: #000000;font-family: Lobster, sans-serif; font-size: 35px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Have a Wonderful Day',
                            'css' => json_encode([
                                'desktop' => 'z-index: 47; left: 198px; top: 322px; color: rgb(6, 127, 58); font-weight: bold;',
                                'mobile' => 'z-index: 47; width: 100%; text-align: center; top: 322px; color: rgb(6, 127, 58); font-weight: bold;'
                            ]),
                        ],
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Birthday Card Template | ToolHubSpot",
                "seo_description" => "Create and personalize this {title} birthday card online. Add your own text, images, and colors. Free editable birthday greeting card template at ToolHubSpot.",
                "seo_keywords" => "birthday card maker online, free editable birthday cards, personalized birthday card templates, custom birthday greeting card, birthday card with photo and text, create birthday card online free, printable birthday cards editable, birthday card background editor, birthday wishes card design free, birthday card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Twins Birthday',
                'slug' => 'twins-birthday',
                'thumbnail' => '/images/greeting-cards/twins-birthday-thumb.png',
                'category' => 'Birthday, New Baby',
                'description' => 'A colorful birthday card with balloons.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/birthday-9.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Birthday',
                            'css' => json_encode([
                                'desktop' => 'z-index: 62; left: 54px; top: 328px; font-family: Lobster, sans-serif; font-size: 36px; color: rgb(49, 66, 10); transform: rotate(-0.320775deg);',
                                'mobile' => 'z-index: 62; width: 100%; text-align: center; top: 328px; font-family: Lobster, sans-serif; font-size: 36px; color: rgb(49, 66, 10); transform: rotate(-0.320775deg);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Vansh',
                            'css' => json_encode([
                                'desktop' => 'z-index: 64; left: 164px; top: 215px; color: rgb(108, 121, 42); font-family: Lobster, sans-serif; font-size: 35px; transform: rotate(-0.165558deg);',
                                'mobile' => 'z-index: 64; left: 2%; top: 215px; color: rgb(108, 121, 42); font-family: Lobster, sans-serif; font-size: 35px; transform: rotate(-0.165558deg);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Ved',
                            'css' => json_encode([
                                'desktop' => 'z-index: 65; left: 364px; top: 128px; color: rgb(108, 121, 42); font-family: Lobster, sans-serif; font-size: 35px;',
                                'mobile' => 'z-index: 65; left: 65%; top: 60px; color: rgb(108, 121, 42); font-family: Lobster, sans-serif; font-size: 35px;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/kid-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 36px; left: 127px; width: 186.993px; height: 173.925px; border: 4px solid rgb(221, 169, 120); cursor: move; z-index: 66; border-radius: 50%; transform: rotate(-0.217921deg);',
                                'mobile' => 'position: absolute; top: 5%; left: 5%; width: 186.993px; height: 173.925px; border: 4px solid rgb(221, 169, 120); cursor: move; z-index: 66; border-radius: 50%; transform: rotate(-0.217921deg);'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/kid-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 197px; left: 313px; width: 190.988px; height: 173.602px; border: 5px solid rgb(174, 163, 163); cursor: move; z-index: 56; border-radius: 50%; transform: rotate(-0.667781deg);',
                                'mobile' => 'position: absolute; top: 160px; left: 40%; width: 190.988px; height: 173.602px; border: 5px solid rgb(174, 163, 163); cursor: move; z-index: 56; border-radius: 50%; transform: rotate(-0.667781deg);'
                            ]),
                        ],
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Birthday Card Template | ToolHubSpot",
                "seo_description" => "Create and personalize this {title} birthday card online. Add your own text, images, and colors. Free editable birthday greeting card template at ToolHubSpot.",
                "seo_keywords" => "birthday card maker online, free editable birthday cards, personalized birthday card templates, custom birthday greeting card, birthday card with photo and text, create birthday card online free, printable birthday cards editable, birthday card background editor, birthday wishes card design free, birthday card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Happy Diwali',
                'slug' => 'happy-diwali',
                'thumbnail' => '/images/greeting-cards/happy-diwali-thumb.png',
                'category' => 'Festival, Diwali',
                'description' => 'Festival',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/festival-1.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy',
                            'css' => json_encode([
                                'desktop' => 'z-index: 39; left: 245px; top: 75px; font-family: Montserrat, sans-serif; font-size: 35px; color: rgb(255, 255, 0); font-weight: normal;',
                                'mobile' => 'z-index: 39; width: 100%; text-align: center; top: 10%; font-family: Montserrat, sans-serif; font-size: 35px; color: rgb(255, 255, 0); font-weight: normal;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Diwali',
                            'css' => json_encode([
                                'desktop' => 'z-index: 40; left: 208px; top: 95px; font-size: 60px; font-family: Pacifico, sans-serif; color: rgb(255, 255, 0);',
                                'mobile' => 'z-index: 40; width: 100%; text-align: center; top: 20%; font-size: 60px; font-family: Pacifico, sans-serif; color: rgb(255, 255, 0);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Your Text Here',
                            'css' => json_encode([
                                'desktop' => 'z-index: 35; left: 211px; top: 204px; color: rgb(255, 255, 0); font-size: 25px;',
                                'mobile' => 'z-index: 35; width: 100%; text-align: center; top: 45%; color: rgb(255, 255, 0); font-size: 25px;'
                            ]),
                        ],                     
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Diwali/Festival Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this {title} festival card online. Add your own text, images, and colors. Free editable Diwali and festival greeting card template at ToolHubSpot.",
                "seo_keywords" => "diwali card maker online, free editable diwali cards, personalized festival card templates, custom diwali greeting card, diwali card with photo and text, create festival card online free, printable diwali cards editable, festival card background editor, diwali wishes card design free, festival card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Diwali Wishes',
                'slug' => 'diwali-wishes',
                'thumbnail' => '/images/greeting-cards/diwali-wishes-thumb.png',
                'category' => 'Festival, Diwali',
                'description' => 'Festival',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/festival-2.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Diwali',
                            'css' => json_encode([
                                'desktop' => 'z-index: 71; left: 24px; top: 51px; color: rgb(218, 165, 32); font-weight: bold; font-family: "Great Vibes", sans-serif; font-size: 45px;',
                                'mobile' => 'z-index: 71; width: 100%; text-align: center; top:5%; color: rgb(218, 165, 32); font-weight: bold; font-family: "Great Vibes", sans-serif; font-size: 45px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Warm Wishes & Gifts for You !',
                            'css' => json_encode([
                                'desktop' => 'z-index: 37; left: 19px; top: 104px; color: rgb(218, 165, 32); line-height: 3; letter-spacing: 0px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 37; width: 100%; text-align: center; top: 25%; color: rgb(218, 165, 32); font-family: Merriweather, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'From: Add Your Name',
                            'css' => json_encode([
                                'desktop' => 'z-index: 72; left: 133px; top: 349px; color: rgb(255, 255, 0); font-family: Lato, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 72; width: 100%; text-align: center; top: 349px; color: rgb(255, 255, 0); font-family: Lato, sans-serif; font-weight: bold;'
                            ]),
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 292px; left: 15px; width: 124px; height: 92px; border: 8px groove rgb(218, 165, 32); cursor: move; z-index: 59; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 50%; left: 15px; width: 124px; height: 92px; border: 8px groove rgb(218, 165, 32); cursor: move; z-index: 59; border-radius: 50%;'
                            ]),
                        ],                   
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Diwali/Festival Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this {title} festival card online. Add your own text, images, and colors. Free editable Diwali and festival greeting card template at ToolHubSpot.",
                "seo_keywords" => "diwali card maker online, free editable diwali cards, personalized festival card templates, custom diwali greeting card, diwali card with photo and text, create festival card online free, printable diwali cards editable, festival card background editor, diwali wishes card design free, festival card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Diwali Celebration',
                'slug' => 'diwali-celebration',
                'thumbnail' => '/images/greeting-cards/diwali-celebration-thumb.png',
                'category' => 'Festival, Diwali',
                'description' => 'Festival',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/festival-3.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Diwali',
                            'css' => json_encode([
                                'desktop' => 'z-index: 44; left: 310px; top: 94px; color: rgb(255, 255, 0); font-weight: bold; font-family: "Dancing Script", sans-serif; font-size: 45px;',
                                'mobile' => 'z-index: 44; width: 100%; text-align: center; top: 5%; color: rgb(255, 255, 0); font-weight: bold; font-family: "Dancing Script", sans-serif; font-size: 45px;'
                            ]),
                        ],                       
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'From: Add Your Name',
                            'css' => json_encode([
                                'desktop' => 'z-index: 42; left: 133px; top: 349px; color: rgb(255, 255, 0); font-family: Lato, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 42; width: 100%; text-align: center; top: 349px; color: rgb(255, 255, 0); font-family: Lato, sans-serif; font-weight: bold;'
                            ]),
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 292px; left: 15px; width: 124px; height: 92px; border: 8px groove rgb(218, 165, 32); cursor: move; z-index: 59; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 60%; left: 15px; width: 124px; height: 92px; border: 8px groove rgb(218, 165, 32); cursor: move; z-index: 59; border-radius: 50%;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/cracker-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 275px; left: 440px; width: 183px; height: 137.281px; border: 0px solid rgb(0, 0, 0); cursor: move; z-index: 46; transform: rotate(10.3277deg);',
                                'mobile' => 'position: absolute; top: 60%; left: 50%; width: 183px; height: 137.281px; border: 0px solid rgb(0, 0, 0); cursor: move; z-index: 46; transform: rotate(10.3277deg);'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/dip-1.gif',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 180px; left: 346px; width: 137px; height: 104px; border: 9px inset rgb(255, 255, 0); cursor: move; z-index: 47; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 27%; left: 30%; width: 137px; height: 104px; border: 9px inset rgb(255, 255, 0); cursor: move; z-index: 47; border-radius: 50%;'
                            ]),
                        ],                  
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Diwali/Festival Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this {title} festival card online. Add your own text, images, and colors. Free editable Diwali and festival greeting card template at ToolHubSpot.",
                "seo_keywords" => "diwali card maker online, free editable diwali cards, personalized festival card templates, custom diwali greeting card, diwali card with photo and text, create festival card online free, printable diwali cards editable, festival card background editor, diwali wishes card design free, festival card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Happy New Year',
                'slug' => 'happy-new-year',
                'thumbnail' => '/images/greeting-cards/happy-new-year-thumb.png',
                'category' => 'Festival, New Year',
                'description' => 'Festival',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/festival-4.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy',
                            'css' => json_encode([
                                'desktop' => 'z-index: 34; left: 207px; top: 59px; color: rgb(255, 255, 128); font-weight: bold; font-family: Righteous, sans-serif; font-size: 45px; text-align: center;',
                                'mobile' => 'z-index: 34; width: 100%; text-align: center; top: 10%; color: rgb(255, 255, 128); font-weight: bold; font-family: Righteous, sans-serif; font-size: 45px; text-align: center;'
                            ]),
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'New Year',
                            'css' => json_encode([
                                'desktop' => 'z-index: 35; left: 187px; top: 126px; color: rgb(255, 255, 128); font-size: 45px; font-family: Righteous, sans-serif;',
                                'mobile' => 'z-index: 35; width: 100%; text-align: center; top: 25%; color: rgb(255, 255, 128); font-size: 45px; font-family: Righteous, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => '2026',
                            'css' => json_encode([
                                'desktop' => 'z-index: 36; left: 224px; top: 188px; color: rgb(255, 255, 128); font-size: 45px; font-weight: bold; font-family: Poppins, sans-serif;',
                                'mobile' => 'z-index: 36; width: 100%; text-align: center; top: 40%; color: rgb(255, 255, 128); font-size: 45px; font-weight: bold; font-family: Poppins, sans-serif;'
                            ]),
                        ],                     
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'From: Add Your Name',
                            'css' => json_encode([
                                'desktop' => 'z-index: 79; left: 249px; top: 345px; color: rgb(255, 255, 0); font-family: Lato, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 79; width: 100%; text-align: center; top: 345px; color: rgb(255, 255, 0); font-family: Lato, sans-serif; font-weight: bold;'
                            ]),
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 296px; left: 467px; width: 124px; height: 92px; border: 8px groove rgb(218, 165, 32); cursor: move; z-index: 82; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 60%; left: 27%; width: 124px; height: 92px; border: 8px groove rgb(218, 165, 32); cursor: move; z-index: 82; border-radius: 50%;'
                            ]),
                        ],                                       
                    ]
                ]),
                'seo_title' => "{title} - Free Editable New Year Celebration Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this {title} New Year celebration card online. Add your own text, images, and colors. Free editable New Year greeting card template at ToolHubSpot.",
                "seo_keywords" => "new year card maker online, free editable new year cards, personalized new year card templates, custom new year greeting card, new year card with photo and text, create new year card online free, printable new year cards editable, new year card background editor, happy new year wishes card design free, new year card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Year Wishes',
                'slug' => 'new-year-wishes',
                'thumbnail' => '/images/greeting-cards/new-year-wishes-thumb.png',
                'category' => 'Festival, New Year',
                'description' => 'Festival',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/festival-5.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy New Year 2026',
                            'css' => json_encode([
                                'desktop' => 'z-index: 78; left: 120px; top: 145px; color: rgb(255, 255, 0); font-weight: bold; font-family: Righteous, sans-serif; font-size: 35px; text-align: center; border-style: none; border-width: 0px; border-color: rgb(255, 255, 255);',
                                'mobile' => 'z-index: 78; top: 5%; color: rgb(255, 255, 0); font-weight: bold; font-family: Righteous, sans-serif; font-size: 35px; text-align: center; border-style: none; border-width: 0px; border-color: rgb(255, 255, 255);'
                            ]),
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Cheers to a healthy, happy, and prosperous New Year!',
                            'css' => json_encode([
                                'desktop' => 'z-index: 83; left: 84px; top: 260px; color: rgb(255, 255, 0); font-size: 15px; font-weight: bold;', 
                                'mobile' => 'z-index: 83; width: 100%; text-align: center; top: 50%; color: rgb(255, 255, 0); font-size: 15px; font-weight: bold;'
                            ]),
                        ],                     
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Add Your Name',
                            'css' => json_encode([
                                'desktop' => 'z-index: 79; left: 315px; top: 345px; color: rgb(255, 255, 0); font-family: Lato, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 79; width: 100%; text-align: center; top: 350px; color: rgb(255, 255, 0); font-family: Lato, sans-serif; font-weight: bold;'
                            ]),
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 296px; left: 467px; width: 124px; height: 92px; border: 8px groove rgb(218, 165, 32); cursor: move; z-index: 82; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 260px; left: 30%; width: 124px; height: 92px; border: 8px groove rgb(218, 165, 32); cursor: move; z-index: 82; border-radius: 50%;'
                            ]),
                        ],                                          
                    ]
                ]),
                'seo_title' => "{title} - Free Editable New Year Celebration Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this {title} New Year celebration card online. Add your own text, images, and colors. Free editable New Year greeting card template at ToolHubSpot.",
                "seo_keywords" => "new year card maker online, free editable new year cards, personalized new year card templates, custom new year greeting card, new year card with photo and text, create new year card online free, printable new year cards editable, new year card background editor, happy new year wishes card design free, new year card customization tool",                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Year Celebration',
                'slug' => 'new-year-celebration',
                'thumbnail' => '/images/greeting-cards/new-year-celebration-thumb.png',
                'category' => 'Festival, New Year',
                'description' => 'Festival',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/festival-6.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy New Year',
                            'css' => json_encode([
                                'desktop' => 'z-index: 36; left: 163px; top: 54px; color: rgb(218, 165, 32); font-weight: bold; font-family: Merriweather, sans-serif; font-size: 40px;',
                                'mobile' => 'z-index: 36; width: 100%; text-align: center; top: 5%; color: rgb(218, 165, 32); font-weight: bold; font-family: Merriweather, sans-serif; font-size: 40px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => '2026',
                            'css' => json_encode([
                                'desktop' => 'z-index: 37; left: 269px; top: 168px; color: rgb(255, 255, 255); font-weight: bold; font-size: 50px; font-family: "Bebas Neue", sans-serif;',
                                'mobile' => 'z-index: 37; width: 100%; text-align: center; top: 50%; color: rgb(255, 255, 255); font-weight: bold; font-size: 50px; font-family: "Bebas Neue", sans-serif;'
                            ]),
                        ],                       
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Let\'s Celebrate !',
                            'css' => json_encode([
                                'desktop' => 'z-index: 25; left: 222px; top: 113px; color: rgb(218, 165, 32); font-family: Pacifico, sans-serif; font-weight: bold; font-size: 30px;',
                                'mobile' => 'z-index: 25; left: 10%; top: 36%; color: rgb(218, 165, 32); font-family: Pacifico, sans-serif; font-weight: bold; font-size: 30px; width: 100%; text-align: center;'
                            ]),
                        ],
                         [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'Cheers to a New Beginning!  ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 38; left: 166px; top: 345px; color: rgb(255, 255, 128); font-weight: bold;',
                                'mobile' => 'z-index: 38; width: 100%; text-align: center; top: 345px; color: rgb(255, 255, 128); font-weight: bold;'
                            ]),
                        ],                                                              
                    ]
                ]),
                'seo_title' => "{title} - Free Editable New Year Celebration Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this {title} New Year celebration card online. Add your own text, images, and colors. Free editable New Year greeting card template at ToolHubSpot.",
                "seo_keywords" => "new year card maker online, free editable new year cards, personalized new year card templates, custom new year greeting card, new year card with photo and text, create new year card online free, printable new year cards editable, new year card background editor, happy new year wishes card design free, new year card customization tool",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Anniversary Wishes',
                'slug' => 'anniversary-wishes',
                'thumbnail' => '/images/greeting-cards/anniversary-wishes-thumb.png',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
                'description' => 'Anniversary',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/anniversary-1.jpeg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy',
                            'css' => json_encode([
                                'desktop' => 'z-index: 52; left: 354px; top: 55px; font-size: 40px; font-family: Lobster, sans-serif; color: rgb(255, 0, 0);',
                                'mobile' => 'z-index: 52; left: 34%; top: 55px; font-size: 40px; font-family: Lobster, sans-serif; color: rgb(255, 0, 0);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Anniversary',
                            'css' => json_encode([
                                'desktop' => 'z-index: 51; left: 308px; top: 111px; font-size: 40px; font-family: Lobster, sans-serif; color: rgb(255, 0, 0);',
                                'mobile' => 'z-index: 51; left: 20%; top: 111px; font-size: 40px; font-family: Lobster, sans-serif; color: rgb(255, 0, 0);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'to my and only one !',
                            'css' => json_encode([
                                'desktop' => 'z-index: 50; left: 323px; top: 178px; font-family: Pacifico, sans-serif;',
                                'mobile' => 'z-index: 50; left: 20%; top: 178px; font-family: Pacifico, sans-serif;'
                            ]),
                        ],                                                                                     
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Celebration Card Template | ToolHubSpot",
                "seo_description" => "Explore beautiful anniversary wishes & greeting cards — heartfelt messages, romantic lines & creative quotes perfect for every couple's milestone celebration.",
                "seo_keywords" => "anniversary wishes,anniversary greeting cards, romantic anniversary messages,anniversary quotes",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Happy Anniversary',
                'slug' => 'happy-anniversary',
                'thumbnail' => '/images/greeting-cards/happy-anniversary-thumb.png',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
                'description' => 'Anniversary',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/anniversary-2.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Anniversary',
                            'css' => json_encode([
                                'desktop' => 'z-index: 20; left: 143px; top: 25px; color: rgb(218, 165, 32); font-weight: bold; font-family: "Dancing Script", sans-serif; font-size: 40px;',
                                'mobile' => 'z-index: 20; left: 18%; top: 37px; color: rgb(218, 165, 32); font-weight: bold; font-family: "Dancing Script", sans-serif; font-size: 27px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'my one and only',
                            'css' => json_encode([
                                'desktop' => 'z-index: 18; left: 203px; top: 323px; font-family: Pacifico, sans-serif; color: rgb(218, 165, 32);',
                                'mobile' => 'z-index: 18; left: 26%; top: 323px; font-family: Pacifico, sans-serif; color: rgb(218, 165, 32);'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/couple-1.jpg',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6; left: 163px; top: 91px; font-family: Pacifico, sans-serif; color: rgb(218, 165, 32); position: absolute; width: 226.6px; height: 226.6px; border: 10px double rgb(218, 165, 32);',
                                'mobile' => 'position: absolute; top: 91px; left: 12%; width: 230px; height: 233px; border: 10px double rgb(218, 165, 32); cursor: move; z-index: 12;'
                            ]),
                        ],                                                                                   
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Celebration Card Template | ToolHubSpot",
                 "seo_description" => "Explore beautiful anniversary wishes & greeting cards — heartfelt messages, romantic lines & creative quotes perfect for every couple's milestone celebration.",
                "seo_keywords" => "anniversary wishes,anniversary greeting cards, romantic anniversary messages,anniversary quotes",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Anniversary Celebration',
                'slug' => 'anniversary-celebration',
                'thumbnail' => '/images/greeting-cards/anniversary-celebration-thumb.png',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
                'description' => 'Anniversary',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/anniversary-3.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'To The Best Decision',
                            'css' => json_encode([
                                'desktop' => 'z-index: 9; left: 153px; top: 20px; text-align: center; font-family: "Courier New", sans-serif; color: rgb(64, 0, 64); font-weight: bold;',
                                'mobile' => 'z-index: 32; left: 6%; top: 21px; text-align: center; font-family: "Courier New", sans-serif; color: rgb(64, 0, 64); font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'I Ever Made',
                            'css' => json_encode([
                                'desktop' => 'z-index: 15; left: 204px; top: 51px; font-family: "Courier New", sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 1; left: 23%; top: 51px; font-family: "Courier New", sans-serif; font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Happy Anniversary',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6; left: 85px; top: 297px; color: rgb(255, 0, 0); font-weight: bold; font-family: "Courier New", sans-serif; font-size: 40px;',
                                'mobile' => 'z-index: 6; left: 16%; top: 297px; color: rgb(255, 0, 0); font-weight: bold; font-family: "Courier New", sans-serif; font-size: 32px;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/couple-2.jpg',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 102px; left: 169px; width: 200px; height: 189px; border: 10px ridge rgb(255, 0, 0); cursor: move; z-index: 31; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 102px; left: 17%; width: 200px; height: 189px; border: 10px ridge rgb(255, 0, 0); cursor: move; z-index: 31; border-radius: 50%;'
                            ]),
                        ],                                                                                      
                    ]
                ]),
                'seo_title' => "{title} - Free Editable Celebration Card Template | ToolHubSpot",
                 "seo_description" => "Explore beautiful anniversary wishes & greeting cards — heartfelt messages, romantic lines & creative quotes perfect for every couple's milestone celebration.",
                "seo_keywords" => "anniversary wishes,anniversary greeting cards, romantic anniversary messages,anniversary quotes",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
