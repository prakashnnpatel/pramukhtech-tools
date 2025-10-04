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
        /*CardTemplates::truncate();
        $cards = [
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
                    "main-border-width" => "10",
                    "main-border-color" => "#7CADB2",
                    "main-border-style" => "double",
                    'bgImage' => "/images/greeting-cards/backgrounds/anniversary-1.jpeg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy',
                            'css' => json_encode([
                                'desktop' => 'z-index: 52; left: 354px; top: 55px; font-size: 40px; font-family: Lobster, sans-serif; color: #1A939B',
                                'mobile' => 'z-index: 52; left: 34%; top: 55px; font-size: 40px; font-family: Lobster, sans-serif; color:#1A939B'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Anniversary',
                            'css' => json_encode([
                                'desktop' => 'z-index: 51; left: 308px; top: 111px; font-size: 40px; font-family: Lobster, sans-serif; color: #1A939B;',
                                'mobile' => 'z-index: 51; left: 20%; top: 111px; font-size: 40px; font-family: Lobster, sans-serif; color: #1A939B;'
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
                "seo_title" => "{title} - Free Editable Anniversary Card | ToolHubSpot",
                "seo_description" => "Explore beautiful anniversary wishes & greeting cards - heartfelt messages, romantic lines & creative quotes perfect for every couple's milestone celebration.",
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
                    "main-border-width" => "10",
                    "main-border-color" => "#f5e6c2",
                    "main-border-style" => "ridge",
                    'bgImage' => "/images/greeting-cards/backgrounds/anniversary-2.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Happy Anniversary',
                            'css' => json_encode([
                                'desktop' => 'z-index: 20; width:100%; text-align: center; top: 25px; color: rgb(218, 165, 32); font-weight: bold; font-family: "Dancing Script", sans-serif; font-size: 40px;',
                                'mobile' => 'z-index: 20; width:100%; text-align: center; top: 37px; color: rgb(218, 165, 32); font-weight: bold; font-family: "Dancing Script", sans-serif; font-size: 27px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'I Love you more every year',
                            'css' => json_encode([
                                'desktop' => 'z-index: 18; width:100%; text-align: center; top: 323px; font-family: Pacifico, sans-serif; color: rgb(218, 165, 32);',
                                'mobile' => 'z-index: 18; width:100%; text-align: center; top: 323px; font-family: Pacifico, sans-serif; color: rgb(218, 165, 32);'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/couple-1.jpg',
                            'css' => json_encode([
                                'desktop' => 'z-index: 1; left: 30%; top: 91px; font-family: Pacifico, sans-serif; color: rgb(218, 165, 32); position: absolute; width: 226.6px; height: 226.6px; border: 10px double rgb(218, 165, 32);',
                                'mobile' => 'position: absolute; top: 91px; left: 12%; width: 230px; height: 233px; border: 10px double rgb(218, 165, 32); cursor: move; z-index: 12;'
                            ]),
                        ],                                                                                   
                    ]
                ]),
                "seo_title" => "{title} - Free Editable Anniversary Card | ToolHubSpot",
                "seo_description" => "Explore beautiful anniversary wishes & greeting cards - heartfelt messages, romantic lines & creative quotes perfect for every couple's milestone celebration.",
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
                                'desktop' => 'z-index: 9; width:100%; text-align: center; top: 20px; text-align: center; font-family: "Courier New", sans-serif; color: rgb(64, 0, 64); font-weight: bold;',
                                'mobile' => 'z-index: 32; width:100%; text-align: center; top: 21px; text-align: center; font-family: "Courier New", sans-serif; color: rgb(64, 0, 64); font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'I Ever Made',
                            'css' => json_encode([
                                'desktop' => 'z-index: 15; width:100%; text-align: center; top: 51px; font-family: "Courier New", sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 1; width:100%; text-align: center; top: 51px; font-family: "Courier New", sans-serif; font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Happy Anniversary',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6; top: 297px; color: rgb(234, 87, 87); font-weight: bold; font-family: "Courier New", sans-serif; font-size: 40px; width:100%; text-align: center;',
                                'mobile' => 'z-index: 6; top: 297px; color: rgb(234, 87, 87); font-weight: bold; font-family: "Courier New", sans-serif; font-size: 32px; width:100%; text-align: center;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/couple-2.jpg',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 102px; left: 33%; width: 200px; height: 189px; border: 10px ridge rgb(252, 166, 166); cursor: move; z-index: 31; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 102px; left: 17%; width: 200px; height: 189px; border: 10px ridge rgb(252, 166, 166); cursor: move; z-index: 31; border-radius: 50%;'
                            ]),
                        ],                                                                                      
                    ]
                ]),
                "seo_title" => "Free Anniversary Card - {title} | ToolHubSpot",
                "seo_description" => "Explore beautiful anniversary wishes & greeting cards - heartfelt messages, romantic lines & creative quotes perfect for every couple's milestone celebration.",
                "seo_keywords" => "anniversary wishes,anniversary greeting cards, romantic anniversary messages,anniversary quotes",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Big Heart',
                'slug' => 'big-heart',
                'thumbnail' => '/images/greeting-cards/big-heart-thumb.png',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
                'description' => 'Anniversary',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/love-13.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Cheers to another year of wonderful moments!",
                            'css' => json_encode([
                                'desktop' => 'z-index: 9;width: 100%;text-align: center;top: 373px;color: rgb(234, 67, 67);font-size: 15px;',
                                'mobile' => 'z-index: 9;width: 100%;text-align: center;top: 342px;color: rgb(234, 67, 67);font-size: 15px;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'I Love You Forever',
                            'css' => json_encode([
                                'desktop' => 'z-index: 4;top: 84px;color: rgb(234, 67, 67);font-weight: bold;font-family: Lobster, sans-serif;font-size: 30px;width: 100%;text-align: center;',
                                'mobile' => 'z-index: 4;top: 20%;color: rgb(234, 67, 67);font-weight: bold;font-family: Lobster, sans-serif;font-size: 30px;width: 100%;text-align: center;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/couple-3.png',
                            'css' => json_encode([
                                'desktop' => 'z-index: 12; width: 206.472px; text-align: center; top: 153px; color: rgb(238, 104, 104); font-size: 15px; left: 193px; position: absolute; height: 206.472px; transform: rotate(-5.49787deg);',
                                'mobile' => 'z-index: 4;width: 163.455px;text-align: center;top: 33%;color: rgb(238, 104, 104);font-size: 15px;left: 64px;position: absolute;height: 163.455px;transform: rotate(-5.49787deg);'
                            ]),
                        ],
                    ]
                ]),
                "seo_title" => "Anniversary Greeting Cards - Beautiful Online Wishes & Messages",
                "seo_description" => "Explore free anniversary greeting cards online. Send romantic, funny, and heartfelt wishes to celebrate love, marriage, and special moments with customizable designs.",
                "seo_keywords" => "Anniversary Greeting Cards, Wedding Anniversary Cards, Happy Anniversary Wishes, Romantic Anniversary Messages, Free Online Greeting Cards, Marriage Anniversary Greetings",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Born to be mine',
                'slug' => 'born-to-be-mine',
                'thumbnail' => '/images/greeting-cards/born-to-be-mine-thumb.png',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
                'description' => 'Anniversary',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/love-4.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "From the very first moment, it feels like destiny whispered the truth, you were born to be mine, and I'll spend forever proving it.",
                            'css' => json_encode([
                                'desktop' => 'z-index: 18; width: 100%; text-align: center; top: 441px;font-family: &quot;Times New Roman&quot;, sans-serif;color: rgb(238, 104, 104); font-size: 15px;',
                                'mobile' => 'z-index: 5;width: 100%;text-align: center;top: 425px;color: rgb(238, 104, 104);font-size: 14px;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Happy Anniversary',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6; top: 11px; color: rgb(234, 87, 87); font-weight: bold; font-family: Lobster, sans-serif; font-size: 40px; width:100%; text-align: center;',
                                'mobile' => 'z-index: 6; top: 2%; color: rgb(234, 87, 87); font-weight: bold; font-family: Lobster, sans-serif; font-size: 28px; width:100%; text-align: center;'
                            ]),
                        ],                        
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/couple-2.jpg',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 157px; left: 202px; width: 185.986px; height: 175.84px; border: 10px ridge rgb(252, 166, 166); cursor: move; z-index: 21; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 167px; left: 57px; width: 185.986px; height: 175.84px; border: 10px ridge rgb(252, 166, 166); cursor: move; z-index: 3; border-radius: 50%;'
                            ]),
                        ],                                                                                      
                    ]
                ]),
                "seo_title" => "Born to Be Mine Anniversary Greeting Card | Romantic Love Card Online",
                "seo_description" => "Celebrate love with the Born to Be Mine anniversary greeting card. A perfect romantic card to express your forever bond - ideal for anniversaries, couples, and special occasions.",
                "seo_keywords" => "born to be mine card, anniversary greeting card, romantic love card, online greeting cards, love anniversary card, forever love greeting, digital greeting card, couples anniversary card",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Happy Valentine Day',
                'slug' => 'happy-valentine-day',
                'thumbnail' => '/images/greeting-cards/happy-valentine-day-thumb.png',
                'category' => 'Love, Valentine Day',
                'description' => 'Valentine Day',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/love-7.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Happy",
                            'css' => json_encode([
                                'desktop' => 'z-index: 26; left: 112px; top: 155px; font-size: 35px; color: rgb(255, 128, 192); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 1; left: 14%; top: 155px; font-size: 35px; color: rgb(255, 128, 192); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Valentines',
                            'css' => json_encode([
                                'desktop' => 'z-index: 29; left: 69px; top: 197px; font-size: 40px; color: rgb(255, 0, 0); font-weight: bold; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 29; left: 1%; top: 197px; font-size: 40px; color: rgb(255, 0, 0); font-weight: bold; font-family: Lobster, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Day',
                            'css' => json_encode([
                                'desktop' => 'z-index: 17; left: 122px; top: 240px; color: rgb(255, 128, 255); font-size: 30px; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 17; left: 20%; top: 240px; color: rgb(255, 128, 255); font-size: 30px; font-family: Lobster, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'You are my today',
                            'css' => json_encode([
                                'desktop' => 'z-index: 18; left: 47px; top: 353px; color: rgb(64, 0, 64); font-family: Lobster, sans-serif; font-size: 25px; text-align: center; font-weight: normal;',
                                'mobile' => 'z-index: 3; left: 15%; top: 353px; color: rgb(64, 0, 64); font-family: Lobster, sans-serif; font-size: 25px; text-align: center; font-weight: normal;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title5',
                            'text' => 'and all of my tomorrows',
                            'css' => json_encode([
                                'desktop' => 'z-index: 17; left: 26px; top: 388px; font-weight: normal; font-family: Lobster, sans-serif; font-size: 25px;',
                                'mobile' => 'z-index: 3; left: 6%; top: 387px; color: rgb(64, 0, 64); font-family: Lobster, sans-serif; font-size: 25px; text-align: center; font-weight: normal;'
                            ]),
                        ],                                                                                  
                    ]
                ]),
                "seo_title" => "Happy Valentine Day - Free Editable Valentine Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Happy Valentine Day card online. Add your own text, images, and colors. Free editable Valentine greeting card template at ToolHubSpot.",
                "seo_keywords" => "valentine card maker online, free editable valentine cards, personalized valentine card templates, custom valentine greeting card, valentine card with photo and text, create valentine card online free, printable valentine cards editable, valentine card background editor, valentine wishes card design free, valentine card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Love You Forever',
                'slug' => 'love-you-forever',
                'thumbnail' => '/images/greeting-cards/love-you-forever-thumb.png',
                'category' => 'Love, Valentine Day',
                'description' => 'Valentine Day',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/love-24.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Happy",
                            'css' => json_encode([
                                'desktop' => 'z-index: 10; left: 345px; top: 129px; font-size: 35px; color: rgb(222, 222, 222); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 39; left: 32%; top: 122px; font-size: 35px; color: rgb(222, 222, 222); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Valentine\'s',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6; left: 297px; top: 169px; color: rgb(255, 255, 255); font-size: 40px; font-family: Lobster, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 40; left: 24%; top: 161px; font-size: 40px; color: rgb(255, 255, 255); font-weight: bold; font-family: Lobster, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Day',
                            'css' => json_encode([
                                'desktop' => 'z-index: 3; left: 350px; top: 221px; color: rgb(222, 222, 222); font-size: 30px; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 41; left: 36%; top: 211px; color: rgb(222, 222, 222); font-size: 30px; font-family: Lobster, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Love is like the wind, you can\'t see it but you can feel it',
                            'css' => json_encode([
                                'desktop' => 'z-index: 9; left: 192px; top: 295px; color: rgb(222, 222, 222); font-family: "Comic Sans MS", sans-serif; font-size: 25px;',
                                'mobile' => 'z-index: 43; left: 20%; top: 294px; color: rgb(222, 222, 222); font-family: Georgia, sans-serif; font-size: 18px; font-weight: bold; text-align: center;'
                            ]),
                        ],                                                                                  
                    ]
                ]),
                "seo_title" => "Love You Forever - Free Editable Valentine Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Love You Forever card online. Add your own text, images, and colors. Free editable Valentine greeting card template at ToolHubSpot.",
                "seo_keywords" => "valentine card maker online, free editable valentine cards, personalized valentine card templates, custom valentine greeting card, valentine card with photo and text, create valentine card online free, printable valentine cards editable, valentine card background editor, valentine wishes card design free, valentine card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Valentine Wishes',
                'slug' => 'valentine-wishes',
                'thumbnail' => '/images/greeting-cards/valentine-wishes-thumb.png',
                'category' => 'Love, Valentine Day',
                'description' => 'Valentine Wishes',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/love-20.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Happy",
                            'css' => json_encode([
                                'desktop' => 'z-index: 1; left: 107px; top: 63px; font-size: 35px; color: rgb(222, 222, 222); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 11; left: 81px; top: 81px; font-size: 35px; color: rgb(222, 222, 222); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Valentine\'s',
                            'css' => json_encode([
                                'desktop' => 'z-index: 18; left: 56px; top: 98px; color: rgb(255, 255, 255); font-size: 40px; font-family: Lobster, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 10; left: 33px; top: 115px; color: rgb(255, 255, 255); font-size: 40px; font-family: Lobster, sans-serif; font-weight: bold;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Day',
                            'css' => json_encode([
                                'desktop' => 'z-index: 7; left: 106px; top: 146px; color: rgb(222, 222, 222); font-size: 30px; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 14; left: 87px; top: 156px; color: rgb(222, 222, 222); font-size: 30px; font-family: Lobster, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'February 14',
                            'css' => json_encode([
                                'desktop' => 'z-index: 15; left: 280px; top: 255px; color: rgb(255, 255, 255); font-weight: bold; font-family: Montserrat, sans-serif;',
                                'mobile' => 'z-index: 15; left: 20%; top: 255px; color: rgb(255, 255, 255); font-weight: bold; font-family: Montserrat, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title5',
                            'text' => 'Let\'s celebrate the day of love with joy and complicity. Each moment together is a story that we write with smiles, caresses and glances that speak for themselves.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 17; left: 172px; top: 288px; color: rgb(222, 222, 222); font-family: "Comic Sans MS", sans-serif; font-size: 15px; font-weight: bold;',
                                'mobile' => 'z-index: 7; left: 10%; top: 282px; color: rgb(222, 222, 222); font-family: "Comic Sans MS", sans-serif; font-size: 15px; font-weight: bold;'
                            ]),
                        ],                                                                                  
                    ]
                ]),
                "seo_title" => "Valentine Wishes - Free Editable Valentine Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Valentine Wishes card online. Add your own text, images, and colors. Free editable Valentine greeting card template at ToolHubSpot.",
                "seo_keywords" => "valentine card maker online, free editable valentine cards, personalized valentine card templates, custom valentine greeting card, valentine card with photo and text, create valentine card online free, printable valentine cards editable, valentine card background editor, valentine wishes card design free, valentine card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The best couple',
                'slug' => 'the-best-couple',
                'thumbnail' => '/images/greeting-cards/the-best-couple-thumb.png',
                'category' => 'Love, Valentine Day, Anniversary, Wedding',
                'description' => 'Anniversary',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/love-15.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Just for you, my love, Thomas",
                            'css' => json_encode([
                                'desktop' => 'width: 100%; text-align: center; color: rgb(238, 104, 104); left: 128px; top: 359px;',
                                'mobile' => 'width: 100%; text-align: center; color: rgb(238, 104, 104); top: 359px;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Happy Anniversary',
                            'css' => json_encode([
                                'desktop' => 'top: -1px; color: rgb(234, 87, 87); font-weight: bold; font-family: "Great Vibes", sans-serif; font-size: 40px; width: 100%; text-align: center; left: 120px;',
                                'mobile' => 'top: -1px;color: rgb(234, 87, 87);font-weight: bold;font-family: "Great Vibes", sans-serif;font-size: 30px;width: 100%;text-align: center;'
                            ]),
                        ],                        
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/couple-4.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 73px; left: 287px; width: 182.967px; height: 172.993px; border: 0px ridge rgb(0, 0, 0); cursor: move; transform: rotate(5.24234deg);',
                                'mobile' => 'position: absolute; top: 72px; left: 130px; width: 145.96px; height: 138.001px; border: 0px ridge rgb(0, 0, 0); cursor: move; transform: rotate(-12.7761deg);'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/couple-5.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 202px; left: 426px; width: 161.953px; height: 153.119px; border: 0px ridge rgb(0, 0, 0); cursor: move; transform: rotate(-6.80346deg); outline: rgb(102, 126, 234) solid 2px;',
                                'mobile' => 'position: absolute; top: 217px; left: 122px; width: 145.96px; height: 138.001px; border: 0px ridge rgb(0, 0, 0); cursor: move; transform: rotate(10.4202deg);'
                            ]),
                        ],
                    ]
                ]),
                "seo_title" => "The Best Couple Anniversary Greeting Card – Create & Share Online",
                "seo_description" => "Celebrate love with The Best Couple anniversary greeting card. Personalize with names, photos, and heartfelt messages. Design online, download, or share instantly.",
                "seo_keywords" => "the best couple anniversary card, anniversary greeting card, personalized anniversary card, online anniversary card maker, custom couple card, romantic anniversary card, free anniversary card design",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Love is Blind',
                'slug' => 'love-is-blind',
                'thumbnail' => '/images/greeting-cards/love-is-blind-thumb.png',
                'category' => 'Love, Valentine Day',
                'description' => 'Valentine Day',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/love-26.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "You are not just my love, you are my world, my reason, and my forever.",
                            'css' => json_encode([
                                'desktop' => 'z-index: 43; left: 15px; top: 15px; color: rgb(64, 0, 0); font-family: "Courier New", sans-serif; font-size: 18px; text-align: center; font-weight: bold;',
                                'mobile' => 'z-index: 1; left: 15px; top: 15px; color: rgb(64, 0, 0); font-family: "Courier New", sans-serif; font-size: 15px; text-align: center; font-weight: bold;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Happy',
                            'css' => json_encode([
                                'desktop' => 'z-index: 38; left: 417px; top: 176px; font-size: 35px; color: rgb(101, 67, 33); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 38; left: 53%; top: 176px; font-size: 35px; color: rgb(101, 67, 33); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Valentines',
                            'css' => json_encode([
                                'desktop' => 'z-index: 23; left: 370px; top: 215px; font-size: 40px; color: rgb(101, 67, 33); font-weight: bold; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 23; left: 42%; top: 215px; font-size: 33px; color: rgb(101, 67, 33); font-weight: bold; font-family: Lobster, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'Day',
                            'css' => json_encode([
                                'desktop' => 'z-index: 42; left: 421px; top: 260px; color: rgb(101, 67, 33); font-size: 30px; font-family: Lobster, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 42; left: 57%; top: 252px; color: rgb(101, 67, 33); font-size: 30px; font-family: Lobster, sans-serif; font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/g-user-6.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 331px; left: 384px; width: 159px; height: 142px; border: 9px solid rgb(101, 67, 33); cursor: move; z-index: 34; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 331px; left: 44%; width: 151px; height: 135px; border: 9px solid rgb(101, 67, 33); cursor: move; z-index: 34; border-radius: 50%;'
                            ]),
                        ],                                                                                  
                    ]
                ]),
                "seo_title" => "Love is Blind - Free Editable Valentine Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Love is Blind card online. Add your own text, images, and colors. Free editable Valentine greeting card template at ToolHubSpot.",
                "seo_keywords" => "valentine card maker online, free editable valentine cards, personalized valentine card templates, custom valentine greeting card, valentine card with photo and text, create valentine card online free, printable valentine cards editable, valentine card background editor, valentine wishes card design free, valentine card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Love is Emotion',
                'slug' => 'love-is-emotion',
                'thumbnail' => '/images/greeting-cards/love-is-emotion-thumb.png',
                'category' => 'Love, Valentine Day',
                'description' => 'Valentine Day',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/love-27.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Happy",
                            'css' => json_encode([
                                'desktop' => 'z-index: 21; left: 112px; top: 155px; font-size: 35px; color: rgb(255, 255, 255); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif; border-width: 0px; border-color: rgb(102, 126, 234);',
                                'mobile' => 'z-index: 1; left: 25%; top: 155px; font-size: 35px; color: rgb(255, 255, 255); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Lobster, sans-serif; border-width: 0px; border-color: rgb(102, 126, 234);'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Valentines',
                            'css' => json_encode([
                                'desktop' => 'z-index: 20; left: 69px; top: 201px; font-size: 40px; color: rgb(255, 255, 255); font-weight: bold; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 20; left: 12%; top: 201px; font-size: 40px; color: rgb(255, 255, 255); font-weight: bold; font-family: Lobster, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Day',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6; left: 126px; top: 252px; color: rgb(255, 255, 255); font-size: 30px; font-family: Lobster, sans-serif;',
                                'mobile' => 'z-index: 6; left: 30%; top: 252px; color: rgb(255, 255, 255); font-size: 30px; font-family: Lobster, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'In your smile, I find my world.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 18; left: 158px; top: 453px; color: rgb(255, 255, 255); font-family: "Bebas Neue", sans-serif; font-size: 25px; text-align: center; font-weight: bold;',
                                'mobile' => 'z-index: 18; left: 6%; top: 453px; color: rgb(255, 255, 255); font-family: "Bebas Neue", sans-serif; font-size: 21px; text-align: center; font-weight: bold;'
                            ]),
                        ],                                                                                                          
                    ]
                ]),
                "seo_title" => "Love is Emotion - Free Editable Valentine Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Love is Emotion card online. Add your own text, images, and colors. Free editable Valentine greeting card template at ToolHubSpot.",
                "seo_keywords" => "valentine card maker online, free editable valentine cards, personalized valentine card templates, custom valentine greeting card, valentine card with photo and text, create valentine card online free, printable valentine cards editable, valentine card background editor, valentine wishes card design free, valentine card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Feeling of Love',
                'slug' => 'feeling-of-love',
                'thumbnail' => '/images/greeting-cards/feeling-of-love-thumb.png',
                'category' => 'Love, Valentine Day',
                'description' => 'Valentine Day',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/love-28.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Happy",
                            'css' => json_encode([
                                'desktop' => 'z-index: 53; left: 161px; top: 73px; font-size: 80px; color: rgb(255, 0, 0); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Pacifico, sans-serif; border-width: 0px; border-color: rgb(102, 126, 234);',
                                'mobile' => 'z-index: 54; left: 16%; top: 73px; font-size: 61px; color: rgb(255, 0, 0); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: Pacifico, sans-serif; border-width: 0px; border-color: rgb(102, 126, 234);'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Valentines',
                            'css' => json_encode([
                                'desktop' => 'z-index: 51; left: 87px; top: 182px; font-size: 80px; color: rgb(255, 0, 0); font-weight: bold; font-family: Pacifico, sans-serif;',
                                'mobile' => 'z-index: 56; left: 9%; top: 182px; font-size: 48px; color: rgb(255, 0, 0); font-weight: bold; font-family: Pacifico, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Day',
                            'css' => json_encode([
                                'desktop' => 'z-index: 48; left: 175px; top: 276px; color: rgb(255, 0, 0); font-size: 80px; font-family: Pacifico, sans-serif;',
                                'mobile' => 'z-index: 48; left: 25%; top: 249px; color: rgb(255, 0, 0); font-size: 56px; font-family: Pacifico, sans-serif;'
                            ]),
                        ],                                                                                                                                  
                    ]
                ]),
                "seo_title" => "Feeling of Love - Free Editable Valentine Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Feeling of Love card online. Add your own text, images, and colors. Free editable Valentine greeting card template at ToolHubSpot.",
                "seo_keywords" => "valentine card maker online, free editable valentine cards, personalized valentine card templates, custom valentine greeting card, valentine card with photo and text, create valentine card online free, printable valentine cards editable, valentine card background editor, valentine wishes card design free, valentine card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Happy Christmas',
                'slug' => 'happy-christmas',
                'thumbnail' => '/images/greeting-cards/happy-christmas-thumb.png',
                'category' => 'Love, Christmas',
                'description' => 'Christmas',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/christmas-1.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Merry",
                            'css' => json_encode([
                                'desktop' => 'z-index: 24; left: 117px; top: 112px; color: rgb(255, 255, 255); font-size: 50px; font-family: "Dancing Script", sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 24; left: 20%; top: 112px; color: rgb(255, 255, 255); font-size: 50px; font-family: "Dancing Script", sans-serif; font-weight: bold;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Christmas',
                            'css' => json_encode([
                                'desktop' => 'z-index: 63; left: 84px; top: 164px; color: rgb(255, 255, 255); font-family: "Dancing Script", sans-serif; font-size: 50px; font-weight: bold;',
                                'mobile' => 'z-index: 1; left: 8%; top: 164px; color: rgb(255, 255, 255); font-family: "Dancing Script", sans-serif; font-size: 50px; font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/chri-1.jpeg',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 283px; left: 229px; width: 133px; height: 115px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 64;',
                                'mobile' => 'position: absolute; top: 283px; left: 30%; width: 133px; height: 115px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 64;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/chri-4.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 115px; left: 115px; width: 31.6px; height: 31.6px; border: 2px rgb(0, 0, 0); cursor: move; z-index: 65;',
                                'mobile' => 'position: absolute; top: 115px; left: 21%; width: 31.6px; height: 31.6px; border: 2px rgb(0, 0, 0); cursor: move; z-index: 65;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/chri-5.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 386px; left: 237px; width: 73px; height: 67px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 66;',
                                'mobile' => 'position: absolute; top: 386px; left: 28%; width: 73px; height: 67px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 66;'
                            ]),
                        ],
                    ]
                ]),
                "seo_title" => "Happy Christmas - Free Editable Christmas Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Happy Christmas card online. Add your own text, images, and colors. Free editable christmas greeting card template at ToolHubSpot.",
                "seo_keywords" => "christmas card maker online, free editable christmas cards, personalized christmas card templates, custom christmas greeting card, christmas card with photo and text, create christmas card online free, printable christmas cards editable, christmas card background editor, christmas wishes card design free, christmas card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Christmas Joy',
                'slug' => 'christmas-joy',
                'thumbnail' => '/images/greeting-cards/christmas-joy-thumb.png',
                'category' => 'Love, Christmas',
                'description' => 'Christmas',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/christmas-2.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Merry",
                            'css' => json_encode([
                                'desktop' => 'z-index: 41; left: 207px; top: 128px; font-size: 80px; color: rgb(255, 255, 255); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: "Bebas Neue", sans-serif; border-width: 0px; border-color: rgb(102, 126, 234);',
                                'mobile' => 'z-index: 1; left: 20%; top: 128px; font-size: 80px; color: rgb(255, 255, 255); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: "Bebas Neue", sans-serif; border-width: 0px; border-color: rgb(102, 126, 234);'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Christmas',
                            'css' => json_encode([
                                'desktop' => 'z-index: 12; left: 139px; top: 196px; font-size: 80px; color: rgb(255, 255, 255); font-weight: bold; font-family: "Bebas Neue", sans-serif;',
                                'mobile' => 'z-index: 12; left: 3%; top: 196px; font-size: 71px; color: rgb(255, 255, 255); font-weight: bold; font-family: "Bebas Neue", sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Wishing you joy, love, and peace this Christmas.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 40; left: 105px; top: 346px; color: rgb(255, 255, 255); font-weight: bold; font-style: italic; font-family: Georgia, sans-serif; font-size: 15px;',
                                'mobile' => 'z-index: 40; left: 10%; top: 346px; color: rgb(255, 255, 255); font-weight: bold; font-style: italic; font-family: Georgia, sans-serif; font-size: 15px;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/chri-1.jpeg',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 129px; left: 141px; width: 80px; height: 116px; border: 0px rgb(0, 0, 0); cursor: move; z-index: 42; transform: rotate(-1.69221deg);',
                                'mobile' => 'position: absolute; top: 129px; left: 1%; width: 80px; height: 116px; border: 0px rgb(0, 0, 0); cursor: move; z-index: 42; transform: rotate(-1.69221deg);'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/chri-5.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 112px; left: 352px; width: 62px; height: 93px; border: 0px solid rgb(0, 0, 0); cursor: move; z-index: 36;',
                                'mobile' => 'position: absolute; top: 112px; left: 74%; width: 62px; height: 93px; border: 0px solid rgb(0, 0, 0); cursor: move; z-index: 36;'
                            ]),
                        ],                   
                    ]
                ]),
                "seo_title" => "Christmas Joy - Free Editable Christmas Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Christmas Joy card online. Add your own text, images, and colors. Free editable christmas greeting card template at ToolHubSpot.",
                "seo_keywords" => "christmas card maker online, free editable christmas cards, personalized christmas card templates, custom christmas greeting card, christmas card with photo and text, create christmas card online free, printable christmas cards editable, christmas card background editor, christmas wishes card design free, christmas card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Christmas Blessings',
                'slug' => 'christmas-blessings',
                'thumbnail' => '/images/greeting-cards/christmas-blessings-thumb.png',
                'category' => 'Love, Christmas',
                'description' => 'Christmas',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "500",
                    'bgImage' => "/images/greeting-cards/backgrounds/christmas-3.jpg",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Merry",
                            'css' => json_encode([
                                'desktop' => 'z-index: 24; left: 275px; top: 301px; font-size: 60px; color: rgb(0, 0, 0); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: "Great Vibes", sans-serif; border-width: 0px; border-color: rgb(102, 126, 234);',
                                'mobile' => 'z-index: 24; left: 20%; top: 301px; font-size: 60px; color: rgb(0, 0, 0); font-weight: normal; padding: 6px; text-align: right; text-decoration: none; border-style: none; font-family: "Great Vibes", sans-serif; border-width: 0px; border-color: rgb(102, 126, 234);'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Christmas',
                            'css' => json_encode([
                                'desktop' => 'z-index: 17; left: 226px; top: 357px; font-size: 60px; color: rgb(0, 0, 0); font-weight: bold; font-family: "Great Vibes", sans-serif;',
                                'mobile' => 'z-index: 17; left: 8%; top: 357px; font-size: 60px; color: rgb(0, 0, 0); font-weight: bold; font-family: "Great Vibes", sans-serif;'
                            ]),
                        ], 
                    ]
                ]),
                "seo_title" => "Christmas Blessings - Free Editable Christmas Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Christmas Blessings card online. Add your own text, images, and colors. Free editable christmas greeting card template at ToolHubSpot.",
                "seo_keywords" => "christmas card maker online, free editable christmas cards, personalized christmas card templates, custom christmas greeting card, christmas card with photo and text, create christmas card online free, printable christmas cards editable, christmas card background editor, christmas wishes card design free, christmas card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],                     
        ];*/

         $cards = [            
            [
                'title' => 'Shop Visiting Card',
                'slug' => 'shop-visiting-card',
                'thumbnail' => '/images/greeting-cards/shop-visiting-card-thumb.png',
                'category' => 'Visiting Card, Business',
                'description' => 'Visiting Card',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "300",
                    'bgImage' => "/images/greeting-cards/backgrounds/visitor-1.jpg",
                    'elements' => [
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/fake_logo.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 61px; left: 167px; width: 88px; height: 66.2933px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 98;',
                                'mobile' => 'position: absolute; top: 61px; left: -1%; width: 88px; height: 66.2933px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 1;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Pramukh Electric",
                            'css' => json_encode([
                                'desktop' => 'z-index: 99; left: 241px; top: 53px; color: rgb(255, 255, 255); font-weight: bold; font-size: 30px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 99; left: 22%; top: 53px; color: rgb(255, 255, 255); font-weight: bold; font-size: 23px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Your Trusted Source for electronics',
                            'css' => json_encode([
                                'desktop' => 'z-index: 63; left: 240px; top: 93px; color: rgb(255, 255, 255); font-size: 16px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 63; left: 24%; top: 93px; color: rgb(255, 255, 255); font-size: 12px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/b-line.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 119px; left: 111px; width: 462px; height: 51.6px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 69;',
                                'mobile' => 'position: absolute; top: 119px; left: 20%; width: 462px; height: 51.6px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 69;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => 'Hasamukh Chaudhary',
                            'css' => json_encode([
                                'desktop' => 'z-index: 102; left: 231px; top: 145px; color: rgb(255, 255, 255); font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 102; left: 11%; top: 145px; color: rgb(255, 255, 255); font-family: Merriweather, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title8',
                            'text' => 'Proprietor',
                            'css' => json_encode([
                                'desktop' => 'z-index: 79; left: 293px; top: 173px; color: rgb(255, 255, 255); font-family: Merriweather, sans-serif; font-size: 15px;',
                                'mobile' => 'z-index: 79; left: 33%; top: 173px; color: rgb(255, 255, 255); font-family: Merriweather, sans-serif; font-size: 15px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Phone: 569-879-6549',
                            'css' => json_encode([
                                'desktop' => 'z-index: 101; left: 144px; top: 214px; color: rgb(255, 255, 255); font-size: 15px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 5; left: 2%; top: 214px; color: rgb(255, 255, 255); font-size: 11px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'Address: 123 Main Street, Anytown, Gujarat, 380001',
                            'css' => json_encode([
                                'desktop' => 'z-index: 96; left: 144px; top: 237px; color: rgb(255, 255, 255); font-size: 15px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 96; left: 2%; top: 237px; color: rgb(255, 255, 255); font-size: 10px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title6',
                            'text' => 'Email: pramukhelectric@gmail.com',
                            'css' => json_encode([
                                'desktop' => 'z-index: 97; left: 143px; top: 263px; color: rgb(255, 255, 255); font-size: 15px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 97; left: 2%; top: 263px; color: rgb(255, 255, 255); font-size: 11px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],
                    ]
                ]),
                "seo_title" => "Shop Visiting Card - Free Editable Visiting Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Shop Visiting Card online. Add your own text, images, and colors. Free editable visiting card template at ToolHubSpot.",
                "seo_keywords" => "visiting card maker online, free editable visiting cards, personalized visiting card templates, custom business card, visiting card with photo and text, create visiting card online free, printable visiting cards editable, visiting card background editor, business card design free, visiting card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Business Visiting Card',
                'slug' => 'business-visiting-card',
                'thumbnail' => '/images/greeting-cards/business-visiting-card-thumb.png',
                'category' => 'Visiting Card, Business',
                'description' => 'Visiting Card',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "300",
                    'bgImage' => "/images/greeting-cards/backgrounds/visitor-3.jpg",
                    'elements' => [
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/fake_logo.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 61px; left: 41px; width: 88px; height: 66.2933px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 39;',
                                'mobile' => 'position: absolute; top: 61px; left: 0%; width: 88px; height: 66.2933px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 86;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Architetur",
                            'css' => json_encode([
                                'desktop' => 'z-index: 85; left: 116px; top: 54px; color: rgb(255, 255, 255); font-weight: bold; font-size: 30px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 85; left: 26%; top: 54px; color: rgb(255, 255, 255); font-weight: bold; font-size: 30px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Real Estate Agent',
                            'css' => json_encode([
                                'desktop' => 'z-index: 78; left: 116px; top: 93px; color: rgb(255, 255, 255); font-size: 16px; font-family: Merriweather, sans-seri',
                                'mobile' => 'z-index: 78; left: 26%; top: 93px; color: rgb(255, 255, 255); font-size: 16px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/b-line.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 114px; left: 55px; width: 351px; height: 51.6px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 43;',
                                'mobile' => 'position: absolute; top: 114px; left: 6%; width: 351px; height: 51.6px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 43;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => 'Phone: 569-879-6549',
                            'css' => json_encode([
                                'desktop' => 'z-index: 53; left: 56px; top: 159px; color: rgb(255, 255, 255); font-size: 15px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 53; left: 6%; top: 159px; color: rgb(255, 255, 255); font-size: 15px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title8',
                            'text' => 'Email: architetur@gmail.com',
                            'css' => json_encode([
                                'desktop' => 'z-index: 82; left: 57px; top: 184px; color: rgb(255, 255, 255); font-size: 15px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 82; left: 6%; top: 184px; color: rgb(255, 255, 255); font-size: 15px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Lara Andreson',
                            'css' => json_encode([
                                'desktop' => 'color: rgb(255, 255, 255); z-index: 68; font-weight: bold; font-size: 15px; left: 0px; top: 0px;',
                                'mobile' => 'color: rgb(255, 255, 255); z-index: 68; font-weight: bold; font-size: 15px; left: 0px; top: 0px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title9',
                            'text' => 'Website: www.pramukhtech.com',
                            'css' => json_encode([
                                'desktop' => 'z-index: 65; left: 56px; top: 211px; color: rgb(255, 255, 255); font-size: 15px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 65; left: 6%; top: 211px; color: rgb(255, 255, 255); font-size: 13px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],                     
                    ]
                ]),
                "seo_title" => "Business Visiting Card - Free Editable Visiting Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Business Visiting Card online. Add your own text, images, and colors. Free editable visiting card template at ToolHubSpot.",
                "seo_keywords" => "visiting card maker online, free editable visiting cards, personalized visiting card templates, custom business card, visiting card with photo and text, create visiting card online free, printable visiting cards editable, visiting card background editor, business card design free, visiting card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Social Visiting Card',
                'slug' => 'social-visiting-card',
                'thumbnail' => '/images/greeting-cards/social-visiting-card-thumb.png',
                'category' => 'Visiting Card, Business',
                'description' => 'Visiting Card',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "300",
                    'bgImage' => "/images/greeting-cards/backgrounds/visitor-4.png",
                    'elements' => [
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/fake_logo.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 38px; left: 54px; width: 88px; height: 66.2933px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 62;',
                                'mobile' => 'position: absolute; top: 38px; left: -3%; width: 88px; height: 66.2933px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 1;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => "Architetur",
                            'css' => json_encode([
                                'desktop' => 'z-index: 14; left: 24px; top: 108px; color: rgb(255, 255, 255); font-weight: bold; font-size: 30px; font-family: Merriweather, sans-serif;',
                                'mobile' => 'z-index: 14; left: 0%; top: 108px; color: rgb(255, 255, 255); font-weight: bold; font-size: 14px; font-family: Merriweather, sans-serif;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Real Estate Agent',
                            'css' => json_encode([
                                'desktop' => 'z-index: 12; left: 29px; top: 158px; color: rgb(255, 255, 255); font-size: 16px; font-family: Merriweather, sans-seri;',
                                'mobile' => 'z-index: 12; left: -1%; top: 131px; color: rgb(255, 255, 255); font-size: 10px; font-family: Merriweather, sans-seri;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => 'Phone: 569-879-6549',
                            'css' => json_encode([
                                'desktop' => 'z-index: 61; left: 301px; top: 116px; color: rgb(64, 0, 64); font-size: 13px; font-family: Merriweather, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 61; left: 44%; top: 116px; color: rgb(64, 0, 64); font-size: 13px; font-family: Merriweather, sans-serif; font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title8',
                            'text' => 'Email: architetur@gmail.com',
                            'css' => json_encode([
                                'desktop' => 'z-index: 57; left: 301px; top: 182px; color: rgb(64, 0, 64); font-size: 13px; font-family: Merriweather, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 57; left: 41%; top: 181px; color: rgb(64, 0, 64); font-size: 13px; font-family: Merriweather, sans-serif; font-weight: bold;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title9',
                            'text' => 'Website: www.pramukhtech.com',
                            'css' => json_encode([
                                'desktop' => 'z-index: 54; left: 300px; top: 209px; color: rgb(64, 0, 64); font-size: 13px; font-family: Merriweather, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 54; left: 40%; top: 227px; color: rgb(64, 0, 64); font-size: 13px; font-family: Merriweather, sans-serif; font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Address: 123 Main Street, Anytown, GJ, 380001',
                            'css' => json_encode([
                                'desktop' => 'z-index: 50; left: 302px; top: 141px; font-size: 13px; font-family: Merriweather, sans-serif; font-weight: bold;',
                                'mobile' => 'z-index: 50; left: 43%; top: 141px; font-size: 11px; font-family: Merriweather, sans-serif; font-weight: bold;'
                            ]),
                        ],                     
                    ]
                ]),
                "seo_title" => "Social Visiting Card - Free Editable Visiting Card Template | ToolHubSpot",
                "seo_description" => "Create and customize this Social Visiting Card online. Add your own text, images, and colors. Free editable visiting card template at ToolHubSpot.",
                "seo_keywords" => "visiting card maker online, free editable visiting cards, personalized visiting card templates, custom business card, visiting card with photo and text, create visiting card online free, printable visiting cards editable, visiting card background editor, business card design free, visiting card customization tool",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ring Ceremony Invitation Card',
                'slug' => 'ring-ceremony-invitation-card',
                'thumbnail' => '/images/greeting-cards/ring-ceremony-invitation-card-thumb.png',
                'category' => 'Ring Ceremony, Love, Wedding',
                'description' => 'Celebrate love and togetherness with our beautifully designed Ring Ceremony Invitation Card. Perfect for inviting family and friends to your special engagement day.',
                'template_data' => json_encode([
                    'bgColor' => '#F7F0E5',
                    'bgImage' => "",
                    "main-card-height" => "1024",
                    "main-card-width" => "1024",
                    'elements' => [
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/border-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; width: 1024px; height: 50px; cursor: move;',
                                'mobile' => 'position: absolute; width: 1024px; height: 50px; cursor: move;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/border-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; width: 1024px; height: 50px; cursor: move; bottom:0px;',
                                'mobile' => 'position: absolute; width: 1024px; height: 50px; cursor: move; bottom:0px;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/frame-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; width: 621.951px; height: 855.972px; cursor: move; bottom: 0px; z-index: 1; left: 30px; top: 87px; border:0px;',
                                'mobile' => 'position: absolute; height: 855.101px; cursor: move; bottom: 0px; z-index: 1; left: 26px; top: 89px; width: 241.465px; border:0px;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img4',
                            'src' => '/images/greeting-cards/element/ganesh-1.jpg',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; height: 70px; cursor: move; z-index: 2; left: 319px; top: 145px; border:0px;',
                                'mobile' => 'position: absolute; height: 70px; cursor: move; z-index: 2; left: 121px; top: 145px; border:0px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'We Request the Pleasure of Your Company',
                            'css' => json_encode([
                                'desktop' => 'z-index: 3; top: 240px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 3; top: 240px; font-size: 18px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; padding-left:40px; padding-right:40px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Pranav & Anjali',
                            'css' => json_encode([
                                'desktop' => 'z-index: 4; top: 315px; font-size: 50px; font-weight: bold; color: rgb(206, 145, 64); width: 100%; text-align: center; left: -16px; letter-spacing: 4px; font-family: "Great Vibes", sans-serif;',
                                'mobile' => 'z-index: 4; top: 331px; font-size: 25px; font-weight: bold; color: rgb(206, 145, 64); width: 100%; text-align: center; left: 0px; letter-spacing: 4px; font-family: "Great Vibes", sans-serif;'
                            ]),
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img5',
                            'src' => '/images/greeting-cards/element/ring.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute;height: 70px;cursor: move;z-index: 4;left: 313px;top: 400px; border:0px;',
                                'mobile' => 'position: absolute;height: 70px;cursor: move;z-index: 4;left: 121px;top: 370px; border:0px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'request the honour of your presence at their',
                            'css' => json_encode([
                                'desktop' => 'z-index: 4;top: 498px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 4;top: 450px;font-size: 14px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px; padding-left:50px; padding-right:40px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'Ring Ceremony',
                            'css' => json_encode([
                                'desktop' => 'z-index: 3;top: 563px;font-size: 50px;font-weight: bold;color: rgb(206, 145, 64);width: 100%;text-align: center; letter-spacing: 4px;font-family: "Great Vibes", sans-serif;',
                                'mobile' => 'z-index: 3;top: 515px;font-size: 25px;font-weight: bold;color: rgb(206, 145, 64);width: 100%;text-align: center; letter-spacing: 4px;font-family: "Great Vibes", sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title5',
                            'text' => 'Monday, 22th December 2025',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5;top: 656px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 5;top: 572px;font-size: 18px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px; padding-left:50px; padding-right:55px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title6',
                            'text' => '7:30 PM Onwards',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6;top: 698px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 6;top: 640px;font-size: 18px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => 'The Grand Ballroom, Celebration St, Mumbai',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5;top: 741px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 5;top: 683px;font-size: 18px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px; padding-left:20px; padding-right:20px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title8',
                            'text' => 'Dinner to Follow',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6;top: 790px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 6;top: 787px;font-size: 18px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;'
                            ]),
                        ],
                    ]
                ]),
                "seo_title" => "Ring Ceremony Invitation Card - Elegant Engagement Invite Designs",
                "seo_description" => "Discover beautiful Ring Ceremony Invitation Cards to invite your loved ones to your engagement. Elegant, customizable designs perfect for creating lasting memories.",
                "seo_keywords" => "Ring Ceremony Invitation Card, Engagement Invitation Card, Engagement Ceremony Invite, Wedding Ring Ceremony Card, Custom Invitation Cards, Printable Engagement Invite, Elegant Ring Ceremony Design, Personalized Invitation Card, Engagement Party Invitation, Digital Invitation Card",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Engagement Ring Ceremony Invitation',
                'slug' => 'engagement-ring-ceremony-invitation',
                'thumbnail' => '/images/greeting-cards/engagement-ring-ceremony-invitation-thumb.png',
                'category' => 'Ring Ceremony, Love, Wedding',
                'description' => 'Invite your loved ones in style with our Engagement Ring Ceremony Invitation cards. Elegant and customizable designs to make your special day unforgettable.',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/border-5.jpg",
                    "main-card-height" => "1024",
                    "main-card-width" => "1024",
                    'elements' => [
                        [
                            'type' => 'image',
                            'id' => 'img4',
                            'src' => '/images/greeting-cards/element/ganesh-3.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; height: 80px;cursor: move;z-index: 16;left: 301px;top: 201px;border: 0px;width: 85.9882px;',
                                'mobile' => 'position: absolute; height: 70px; cursor: move; z-index: 2; left: 115px; top: 200px; border:0px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'We Request the Pleasure of Your Company',
                            'css' => json_encode([
                                'desktop' => 'z-index: 3; top: 295px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 3; top: 280px; font-size: 18px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; padding-left:40px; padding-right:40px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'Kajal & Dishal',
                            'css' => json_encode([
                                'desktop' => 'z-index: 4; top: 355px; font-size: 50px; font-weight: bold; color: rgb(206, 145, 64); width: 100%; text-align: center; left: -16px; letter-spacing: 4px; font-family: "Great Vibes", sans-serif;',
                                'mobile' => 'z-index: 4; top: 350px; font-size: 25px; font-weight: bold; color: rgb(206, 145, 64); width: 100%; text-align: center; left: 0px; letter-spacing: 4px; font-family: "Great Vibes", sans-serif;'
                            ]),
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img5',
                            'src' => '/images/greeting-cards/element/ring.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute;height: 70px;cursor: move;z-index: 4;left: 313px;top: 425px; border:0px;',
                                'mobile' => 'position: absolute;height: 70px;cursor: move;z-index: 4;left: 121px;top: 390px; border:0px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'request the honour of your presence at their',
                            'css' => json_encode([
                                'desktop' => 'z-index: 4;top: 498px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 4;top: 450px;font-size: 14px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px; padding-left:50px; padding-right:40px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'Ring Ceremony',
                            'css' => json_encode([
                                'desktop' => 'z-index: 3;top: 563px;font-size: 50px;font-weight: bold;color: rgb(206, 145, 64);width: 100%;text-align: center; letter-spacing: 4px;font-family: "Great Vibes", sans-serif;',
                                'mobile' => 'z-index: 3;top: 515px;font-size: 25px;font-weight: bold;color: rgb(206, 145, 64);width: 100%;text-align: center; letter-spacing: 4px;font-family: "Great Vibes", sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title5',
                            'text' => 'Tuesday, 07th July 2026',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5;top: 656px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 5;top: 572px;font-size: 18px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px; padding-left:50px; padding-right:55px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title6',
                            'text' => '7:30 PM Onwards',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6;top: 698px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 6;top: 640px;font-size: 18px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => 'The Grand Ballroom, Celebration St, Mumbai',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5;top: 741px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 5;top: 683px;font-size: 18px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px; padding-left:20px; padding-right:20px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title8',
                            'text' => 'Dinner to Follow',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6;top: 790px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;',
                                'mobile' => 'z-index: 6;top: 787px;font-size: 18px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;'
                            ]),
                        ],
                    ]
                ]),
                "seo_title" => "Engagement Ring Ceremony Invitation - Stylish Custom Cards",
                "seo_description" => "Explore elegant Engagement Ring Ceremony Invitation cards to invite your family and friends. Personalized, stylish, and perfect for celebrating your special day.",
                "seo_keywords" => "Engagement Ring Ceremony Invitation, Ring Ceremony Card, Engagement Invitation, Engagement Invite Card, Wedding Ring Ceremony Invitation, Custom Engagement Cards",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Home Invitation',
                'slug' => 'new-home-invitation',
                'thumbnail' => '/images/greeting-cards/new-home-invitation-thumb.png',
                'category' => 'Gruh Pravesh, Love, Wedding',
                'description' => 'Invite your loved ones to bless your new home with our beautifully designed Gruh Pravesh invitation card. Perfect for sharing the joy of your housewarming ceremony in a traditional yet elegant way',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/border-13.jpg",
                    "main-card-height" => "1024",
                    "main-card-width" => "1024",
                    'elements' => [
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/ganesh-3.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; height: 80px; cursor: move; z-index: 3; left: 305px; top: 12px; border: 0px; width: 85.9882px;',
                                'mobile' => 'position: absolute;height: 80px;cursor: move;z-index: 3;left: 100px;top: 12px;border: 0px;width: 85.9882px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Warmly Invite You to Grace the Auspicious Occasion of Our',
                            'css' => json_encode([
                                'desktop' => 'z-index: 2; top: 154px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: 17px; padding: 0px 150px;',
                                'mobile' => 'z-index: 1;top: 90px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'NEW HOME & GRUH PRAVESH',
                            'css' => json_encode([
                                'desktop' => 'z-index: 3; top: 260px; font-size: 40px; font-weight: bold; color: #AA7A2D; width: 100%; text-align: center; left: -19px; letter-spacing: 0px; text-decoration: none; padding: 0px 140px 0px 195px;',
                                'mobile' => 'z-index: 2;top: 230px;font-size: 22px;font-weight: bold;color: rgb(170, 122, 45);width: 100%;text-align: center;letter-spacing: 0px;text-decoration: none;'
                            ]),
                        ], 
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/separator-3.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; height: 118.941px; cursor: move; z-index: 4; left: 213px; top: 350px; border: 1px none rgb(0, 0, 0); width: 280.097px;',
                                'mobile' => 'position: absolute;height: 100px;cursor: move;z-index: 1;left: 10px;top: 280px;border: 1px none rgb(0, 0, 0);width: 280.097px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'Followed by Dinner',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5; top: 444px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: -2px;',
                                'mobile' => 'z-index: 5; top: 350px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: -2px;'
                            ]),
                        ],                        
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'Tuesday, 07th July 2026',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5; top: 491px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: 8px;',
                                'mobile' => 'z-index: 5; top: 400px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: 8px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title5',
                            'text' => '7:30 PM Onwards',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5; top: 538px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: -6px;',
                                'mobile' => 'z-index: 5; top: 460px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: -6px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title6',
                            'text' => 'Address: The Grand Ballroom, Celebration St, Mumbai',
                            'css' => json_encode([
                                'desktop' => 'z-index: 22;top: 590px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;left: 16px;padding: 0 50px 0 50px;',
                                'mobile' => 'z-index: 2;top: 520px;font-size: 24px;font-family: Lobster, sans-serif;font-weight: normal;color: rgb(206, 145, 64);width: 100%;text-align: center;letter-spacing: 0.9px;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/separator-3.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; height: 104.927px; cursor: move; z-index: 7; left: 212px; top: 624px; border: 1px none rgb(0, 0, 0); width: 280.097px;',
                                'mobile' => 'position: absolute;height: 100px;cursor: move;z-index: 2;left: 10px;top: 624px;border: 1px none rgb(0, 0, 0);width: 280.097px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => 'With Love & Regards,',
                            'css' => json_encode([
                                'desktop' => 'z-index: 3; top: 723px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: -1px;',
                                'mobile' => 'z-index: 3; top: 710px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: -1px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title8',
                            'text' => 'Your Name 1',
                            'css' => json_encode([
                                'desktop' => 'z-index: 8; top: 770px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: 4px;',
                                'mobile' => 'z-index: 8; top: 760px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: 4px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title9',
                            'text' => 'Name 2',
                            'css' => json_encode([
                                'desktop' => 'z-index: 7; top: 815px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: 3px;',
                                'mobile' => 'z-index: 7; top: 805px; font-size: 24px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0.9px; left: 3px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title10',
                            'text' => 'Look forward to your gracious presence',
                            'css' => json_encode([
                                'desktop' => 'z-index: 7; top: 881px; font-size: 18px; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0px; left: -2px; line-height: 1.2;',
                                'mobile' => 'z-index: 7; top: 881px; font-size: 18px; font-weight: normal; color: rgb(206, 145, 64); width: 100%; text-align: center; letter-spacing: 0px; left: -2px; line-height: 1.2;'
                            ]),
                        ],
                    ]
                ]),
                "seo_title" => "Gruh Pravesh Invitation Card | Traditional & Customizable Housewarming Cards",
                "seo_description" => "Design and share elegant Gruh Pravesh invitation cards online. Celebrate your housewarming ceremony with beautifully crafted cards featuring traditional motifs and personalized details.",
                "seo_keywords" => "Gruh Pravesh card, Gruh Pravesh invitation, Griha Pravesh card online, housewarming invitation card, home entry card, Griha Pravesh digital invite, traditional housewarming card, personalized Gruh Pravesh invitation",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'New Home Blessings Card',
                'slug' => 'new-home-blessings-card',
                'thumbnail' => '/images/greeting-cards/new-home-blessings-card-thumb.png',
                'category' => 'Gruh Pravesh, Love, Wedding',
                'description' => 'Celebrate the joy of a fresh beginning with our New Home Blessings Card, designed to invite loved ones to your housewarming. Share your happiness and seek their warm wishes in style',
                'template_data' => json_encode([
                    'bgColor' => '',
                    'bgImage' => "/images/greeting-cards/backgrounds/border-14.jpg",
                    "main-card-height" => "1064",
                    'elements' => [
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'વાસ્તુ પૂજન',
                            'css' => json_encode([
                                'desktop' => 'z-index: 7; top: 165px; font-size: 30px; font-family: Georgia, sans-serif; font-weight: bold; color: rgb(220, 4, 37); width: 100%; text-align: center; letter-spacing: 0.9px; left: 2px; padding: 0px 131px;',
                                'mobile' => 'z-index: 7; top: 165px; font-size: 30px; font-family: Georgia, sans-serif; font-weight: bold; color: rgb(220, 4, 37); width: 100%; text-align: center; letter-spacing: 0.9px; left: 2px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'સહર્ષ ખુશાલી સાથે જણાવવાનું કે શ્રી ઉમિયા માતાજીની અસીમ કૃપા અને વડીલોના આશીર્વાદ થી અમારા નૂતન ઘરમાં વાસ્તુ યજ્ઞ સંવત ૨૦૮૧ મહા વદ સાતમ ને શુક્રવાર તા. ૨૧-૦૧-૨૦૨૬ ના રોજ રાખેલ છે, તો આ શુભ પ્રસંગે આપ સ્નેહીશ્રી ને પધારવા ભાવભર્યું આમંત્રણ છે.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5;top: 231px;font-size: 16px;font-family: Georgia, sans-serif;color: rgb(53, 61, 22);width: 100%;text-align: center;letter-spacing: 0.9px;left: 4px;padding: 0;padding: 0px 131px;',
                                'mobile' => 'z-index: 5;top: 231px;font-size: 16px;font-family: Georgia, sans-serif;color: rgb(53, 61, 22);width: 100%;text-align: center;letter-spacing: 0.9px;left: 4px;padding: 0;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/separator-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute;height: 20px;cursor: move;z-index: 5;left: 200px;top: 406px;border: 1px none rgb(0, 0, 0);',
                                'mobile' => 'position: absolute;height: 20px;cursor: move;z-index: 5;left: 15%;top: 406px;border: 1px none rgb(0, 0, 0);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => 'વાસ્તુ યજ્ઞ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5; top: 430px; font-size: 22px; font-family: Georgia, sans-serif; font-weight: bold; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: -3px; padding: 0px 131px;',
                                'mobile' => 'z-index: 5; top: 430px; font-size: 22px; font-family: Georgia, sans-serif; font-weight: bold; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: -3px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'તા ૨૧-૦૧-૨૦૨૬ સવારે ૯:૦૦ થી ૪:૧૫ કલાક સુધી',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5; top: 461px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 4px;',
                                'mobile' => 'z-index: 5; top: 461px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 4px;'
                            ]),
                        ],     
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/separator-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; height: 20px; cursor: move; z-index: 25; left: 200px; top: 500px; border: 1px none rgb(0, 0, 0);',
                                'mobile' => 'position: absolute; height: 20px; cursor: move; z-index: 25; left: 15%; top: 510px; border: 1px none rgb(0, 0, 0);'
                            ]),
                        ],            
                        [
                            'type' => 'text',
                            'id' => 'title5',
                            'text' => 'ભોજન સમારંભ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 5; top: 530px; font-size: 22px; font-family: Georgia, sans-serif; font-weight: bold; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 4px; padding: 0px 131px;',
                                'mobile' => 'z-index: 5; top: 530px; font-size: 22px; font-family: Georgia, sans-serif; font-weight: bold; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 4px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title6',
                            'text' => 'સાંજે ૬:૦૦ કલાકે',
                            'css' => json_encode([
                                'desktop' => 'z-index: 28; top: 568px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: -3px;',
                                'mobile' => 'z-index: 28; top: 567px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: -3px;'
                            ]),
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => '૧૦૧, શ્રી હરિ બંગલૉ, VIP રોડ, અમદાવાદ, ગુજરાત',
                            'css' => json_encode([
                                'desktop' => 'z-index: 28; top: 590px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: -3px;',
                                'mobile' => 'z-index: 28; top: 593px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: -3px;'
                            ]),
                        ],  
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/separator-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; height: 20px; cursor: move; z-index: 25; left: 200px; top: 640px; border: 1px none rgb(0, 0, 0);',
                                'mobile' => 'position: absolute; height: 20px; cursor: move; z-index: 25; left: 15%; top: 650px; border: 1px none rgb(0, 0, 0);'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title8',
                            'text' => ' શુભેચ્છક',
                            'css' => json_encode([
                                'desktop' => 'z-index: 11;top: 670px;font-size: 22px;font-family: Georgia, sans-serif;font-weight: bold;color: rgb(53, 61, 22);width: 100%;text-align: center;letter-spacing: 0.9px;padding: 0px 131px;',
                                'mobile' => 'z-index: 11;top: 670px;font-size: 22px;font-family: Georgia, sans-serif;font-weight: bold;color: rgb(53, 61, 22);width: 100%;text-align: center;letter-spacing: 0.9px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title9',
                            'text' => 'શ્રી નવીનભાઈ મહેશભાઈ પટેલ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 11; top: 703px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 5px;',
                                'mobile' => 'z-index: 11; top: 703px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 5px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title10',
                            'text' => 'શ્રીમતી મીરાબેન નવીનભાઈ પટેલ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 9; top: 727px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 2px;',
                                'mobile' => 'z-index: 9; top: 727px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 2px;'
                            ]),
                        ], 
                        [
                            'type' => 'text',
                            'id' => 'title11',
                            'text' => 'શ્રી કુશ નવીનભાઈ પટેલ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 10; top: 747px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 8px;',
                                'mobile' => 'z-index: 10; top: 747px; font-size: 16px; font-family: Lobster, sans-serif; font-weight: normal; color: rgb(53, 61, 22); width: 100%; text-align: center; letter-spacing: 0.9px; left: 8px;'
                            ]),
                        ], 
                    ]
                ]),
                "seo_title" => "New Home Blessings Card | Personalized Housewarming Invitation Online",
                "seo_description" => "Create and share beautiful New Home Blessings Cards to invite family and friends to your housewarming ceremony. Customize your card with names, dates, and auspicious designs.",
                "seo_keywords" => "new home blessings card, housewarming invitation card, personalized new home card, digital housewarming invite, new home entry card, online housewarming invitation, home blessings card design",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Funeral Card',
                'slug' => 'funeral-card',
                'thumbnail' => '/images/greeting-cards/funeral-thumb.png',
                'category' => 'Funeral Card, Business',
                'description' => 'Funeral Card',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "800",
                    'bgImage' => "/images/greeting-cards/backgrounds/funeral-8.jpg",
                    'elements' => [
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/frame-6.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 1px; left: 1px; width: 597px; height: 799.1px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 1;',
                                'mobile' => 'position: absolute; top: 1px; left: 1px; width: 597px; height: 799.1px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 1;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'બેસણું',
                            'css' => json_encode([
                                'desktop' => 'z-index: 145; left: 251px; top: 50px; font-weight: bold; font-family: "Times New Roman", sans-serif; font-size: 30px; font-style: italic; text-decoration: underline;',
                                'mobile' => 'z-index: 145; left: 251px; top: 50px; font-weight: bold; font-family: "Times New Roman", sans-serif; font-size: 30px; font-style: italic; text-decoration: underline;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/photoframe-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 98px; left: 228px; width: 152px; height: 143px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 160;',
                                'mobile' => 'position: absolute; top: 98px; left: 228px; width: 152px; height: 143px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 160;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/fakeman-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 114px; left: 248px; width: 109px; height: 109px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 201;',
                                'mobile' => 'position: absolute; top: 114px; left: 248px; width: 109px; height: 109px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 201;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'સ્વ. હીરાભાઈ  કાંતિલાલ પટેલ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 246; left: 185px; top: 241px; font-weight: bold; font-size: 20px; color: rgb(64, 0, 0); font-family: Arial, sans-serif;',
                                'mobile' => 'z-index: 246; left: 185px; top: 241px; font-weight: bold; font-size: 20px; color: rgb(64, 0, 0); font-family: Arial, sans-serif;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => '(વયઃ ૬૦) ગામ : ગરયાધાર
                            હિન્દુધર્મ મુજબ જણાવાનું કે
                            અમારા દાદા હીરાભાઈ કાંતિલાલ પટેલ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 1; left: 35%; top: 272px; text-align: center; font-size: 13px; font-weight: bold; font-family: Arial, sans-serif; width: 33%;',
                                'mobile' => 'z-index: 1; left: 35%; top: 272px; text-align: center; font-size: 13px; font-weight: bold; font-family: Arial, sans-serif; width: 33%;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'તા.-૧૧-૦૧-૨૦૨૪ ના રોજ અકાલકાળે સ્વર્ગવાસ પામ્યા છે.
                            ભગવાન એમના દિવ્ય આત્માને શાંતિ આપે એવી અમારી પ્રાર્થના.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 6; left: 129px; top: 335px; font-size: 13px; text-align: center; font-weight: bold; font-family: Arial, sans-serif; width: 60%;',
                                'mobile' => 'z-index: 6; left: 129px; top: 335px; font-size: 13px; text-align: center; font-weight: bold; font-family: Arial, sans-serif; width: 60%;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title5',
                            'text' => 'બેસણું',
                            'css' => json_encode([
                                'desktop' => 'z-index: 236; left: 255px; top: 384px; font-weight: bold; text-decoration: underline;',
                                'mobile' => 'z-index: 236; left: 255px; top: 384px; font-weight: bold; text-decoration: underline;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title6',
                            'text' => 'તા.- ૧૩-૦૧-૨૦૨૪ ના રોજ
                            સાંજ ૪:૩૦ થી ૭:૦૦ સુધી રાખેલ છે.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 2; left: 32%; top: 419px; font-size: 13px; text-align: center; font-weight: bold; font-family: Arial, sans-serif; width: 33%;',
                                'mobile' => 'z-index: 2; left: 32%; top: 419px; font-size: 13px; text-align: center; font-weight: bold; font-family: Arial, sans-serif; width: 33%;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => 'બેસણાનું સ્થળ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 238; left: 236px; top: 469px; font-weight: bold; font-size: 18px; text-decoration: underline;',
                                'mobile' => 'z-index: 238; left: 236px; top: 469px; font-weight: bold; font-size: 18px; text-decoration: underline;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title7',
                            'text' => 'રાજમહેલ હોટેલ સમક્ષ પાઠીડાર સમાજવાડી,
                            અંબાલિયાળ રોડ, રાજકોટ.',
                            'css' => json_encode([
                                'desktop' => 'z-index: 2; left: 177px; top: 503px; font-size: 13px; text-align: center; font-weight: bold; font-family: Arial, sans-serif; width: 43%;',
                                'mobile' => 'z-index: 2; left: 177px; top: 503px; font-size: 13px; text-align: center; font-weight: bold; font-family: Arial, sans-serif; width: 43%;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title8',
                            'text' => 'સ્નેહાધીન',
                            'css' => json_encode([
                                'desktop' => 'z-index: 252; left: 250px; top: 552px; font-size: 18px; font-weight: bold; text-decoration: underline;',
                                'mobile' => 'z-index: 252; left: 250px; top: 552px; font-size: 18px; font-weight: bold; text-decoration: underline;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title9',
                            'text' => 'બાબુલાલ અંબાલાલભાઈ પટેલ
                            અનિલકુમાર કાંતિલાલ પટેલ
                            જગદીશકુમાર કાંતિલાલ પટેલ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 253; left: 22%; top: 585px; font-size: 13px; font-weight: bold; width: 30%;',
                                'mobile' => 'z-index: 253; left: 22%; top: 585px; font-size: 13px; font-weight: bold; width: 30%;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title10',
                            'text' => 'દિપકકુમાર કાંતિલાલ પટેલ
                            જશવંતકુમાર કાંતિલાલ પટેલ
                            પરિવારજન તથા સગાં-વ્હાલાં',
                            'css' => json_encode([
                                'desktop' => 'z-index: 254; left: 50%; top: 585px; font-size: 13px; font-weight: bold; width: 30%;',
                                'mobile' => 'z-index: 254; left: 50%; top: 585px; font-size: 13px; font-weight: bold; width: 30%;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title10',
                            'text' => 'પટેલ પરિવાર ના જય શ્રી કૃષ્ણ',
                            'css' => json_encode([
                                'desktop' => 'z-index: 243; left: 175px; top: 668px; font-weight: bold; text-decoration: none; font-size: 18px;',
                                'mobile' => 'z-index: 243; left: 175px; top: 668px; font-weight: bold; text-decoration: none; font-size: 18px;'
                            ]),
                        ],          
                    ]
                ]),
                "seo_title" => "Funeral Card Maker - Create Custom Funeral Invitation Cards Online",
                "seo_description" => "Design and personalize Funeral Cards online with our easy-to-use template. Create respectful and elegant funeral invitation cards to honor your loved ones.",
                "seo_keywords" => "Funeral card, Funeral invitation card, Memorial card, Sympathy card, Obituary card, Funeral announcement card, Custom funeral card, Printable funeral invitation, Digital funeral card, Personalized memorial card",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Funeral Photo Card',
                'slug' => 'funeral-photo-card',
                'thumbnail' => '/images/greeting-cards/funeral-photo-card-thumb.png',
                'category' => 'Funeral Card, Business',
                'description' => 'Funeral Card',
                'template_data' => json_encode([
                    'bgColor' => '',
                    "main-card-height" => "730",
                    'bgImage' => "/images/greeting-cards/backgrounds/funeral-8.jpg",
                    'elements' => [
                        [
                            'type' => 'image',
                            'id' => 'img1',
                            'src' => '/images/greeting-cards/element/frame-5.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 0px; left: 0px; width: 598px; height: 728.5px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 1;',
                                'mobile' => 'position: absolute; top: 0px; left: 0px; width: 100%; height: 728.5px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 1;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img2',
                            'src' => '/images/greeting-cards/element/photoframe-2.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 206px; left: 184px; width: 200px; height: 198px; border: 0px solid rgb(0, 0, 0); cursor: move; z-index: 64;',
                                'mobile' => 'position: absolute; top: 206px; left: 13%; width: 200px; height: 198px; border: 0px solid rgb(0, 0, 0); cursor: move; z-index: 64;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img3',
                            'src' => '/images/greeting-cards/element/fakeman-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 211px; left: 208px; width: 167px; height: 150px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 65; border-radius: 50%;',
                                'mobile' => 'position: absolute; top: 213px; left: 21%; width: 167px; height: 150px; border: 1px solid rgb(136, 136, 136); cursor: move; z-index: 65; border-radius: 50%;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title1',
                            'text' => 'Celebrating the life of',
                            'css' => json_encode([
                                'desktop' => 'z-index: 66; left: 179px; top: 128px; font-weight: bold; font-family: Georgia, sans-serif;',
                                'mobile' => 'z-index: 1; left: 18%; top: 128px; font-weight: bold; font-family: Georgia, sans-serif; font-size: 15px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title2',
                            'text' => 'james smith',
                            'css' => json_encode([
                                'desktop' => 'z-index: 69; left: 221px; top: 157px; font-weight: bold; font-family: Pacifico, sans-serif; font-size: 25px;',
                                'mobile' => 'z-index: 69; left: 26%; top: 157px; font-weight: bold; font-family: Pacifico, sans-serif; font-size: 25px;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title3',
                            'text' => '(March 20, 1991 - March 2, 2023)',
                            'css' => json_encode([
                                'desktop' => 'z-index: 89; left: 166px; top: 405px; font-family: Merriweather, sans-serif; font-size: 15px; font-weight: bold;',
                                'mobile' => 'z-index: 1; left: 16%; top: 405px; font-family: Merriweather, sans-serif; font-size: 12px; font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img4',
                            'src' => '/images/greeting-cards/element/separator-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 391px; left: 187px; width: 200px; height: 120px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 88;',
                                'mobile' => 'position: absolute; top: 391px; left: 20%; width: 200px; height: 120px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 88;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => 'Monday, Mar 10th 2024 | 10:00 AM',
                            'css' => json_encode([
                                'desktop' => 'z-index: 93; left: 162px; top: 461px; font-size: 15px; font-weight: bold;',
                                'mobile' => 'z-index: 93; left: 16%; top: 461px; font-size: 12px; font-weight: bold;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img5',
                            'src' => '/images/greeting-cards/element/separator-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 463px; left: 187px; width: 200px; height: 89px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 108;',
                                'mobile' => 'position: absolute; top: 463px; left: 20%; width: 200px; height: 89px; border: 1px rgb(0, 0, 0); cursor: move; z-index: 108;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title4',
                            'text' => '47 V 12st, NY 1002, USA',
                            'css' => json_encode([
                                'desktop' => 'z-index: 132; left: 231px; top: 524px; font-family: Merriweather, sans-serif; font-size: 15px; text-align: center; font-weight: bold; width: 19%;',
                                'mobile' => 'z-index: 1; left: 16%; top: 524px; font-family: Merriweather, sans-serif; font-size: 12px; text-align: center; font-weight: bold; width: 73%;'
                            ]),
                        ],
                        [
                            'type' => 'image',
                            'id' => 'img5',
                            'src' => '/images/greeting-cards/element/separator-1.png',
                            'css' => json_encode([
                                'desktop' => 'position: absolute; top: 557px; left: 186px; width: 200px; height: 67px; border: 0px solid rgb(0, 0, 0); cursor: move; z-index: 6;',
                                'mobile' => 'position: absolute; top: 557px; left: 20%; width: 200px; height: 67px; border: 0px solid rgb(0, 0, 0); cursor: move; z-index: 6;'
                            ]),
                        ],
                        [
                            'type' => 'text',
                            'id' => 'title5',
                            'text' => 'RSVP to John\'s at +123-111-111',
                            'css' => json_encode([
                                'desktop' => 'z-index: 1; left: 214px; top: 601px; text-align: center; font-weight: bold; font-size: 15px; width: 25%;',
                                'mobile' => 'z-index: 1; left: 20%; top: 601px; text-align: center; font-weight: bold; font-size: 15px; width: 69%;'
                            ]),
                        ],                                                   
                    ]
                ]),
                "seo_title" => "Funeral Card Maker - Create Custom Funeral Invitation Cards Online",
                "seo_description" => "Design and personalize Funeral Cards online with our easy-to-use template. Create respectful and elegant funeral invitation cards to honor your loved ones.",
                "seo_keywords" => "Funeral card, Funeral invitation card, Memorial card, Sympathy card, Obituary card, Funeral announcement card, Custom funeral card, Printable funeral invitation, Digital funeral card, Personalized memorial card",               
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($cards as $index => $card) {
            CardTemplates::updateOrInsert(
                ['slug' => $card['slug']],
                $card
            );
        }
    }
}
