<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Samsung Galaxy Tab S9 FE',
                'price' => '3699',
                'description' => 'View, create and share what you love in vivid detail on the bright, immersive screen',
                'category'=>"Tablet",
                'gallery'=>'https://images.samsung.com/is/image/samsung/assets/my/tablets/galaxy-tab-s9-fe/buy/TabS9FE-Gray_Color-Selection_MO_720x720.jpg?imwidth=480'
            ],
            [
                'name' => 'Samsung Galaxy Watch6',
                'price' => '1099',
                'description' => 'Start your everyday wellness journey',
                'category'=>"Watches",
                'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/my/2307/gallery/my-galaxy-watch6-r935-sm-r930nzeaxme-537410569?$1300_1038_PNG$'
            ],
            [
                'name' => 'Samsung Galaxy Buds2 Pro',
                'price' => '899',
                'description' => 'The ultimate Hi-Fi sound is now wireless',
                'category'=>"Galaxy Buds",
                'gallery'=>'https://images.samsung.com/is/image/samsung/p6pim/my/2208/gallery/my-galaxy-buds2-pro-r510-sm-r510nlvaxme-533190782?$1300_1038_PNG$'
            ],
            [
                'name' => 'Samsung Z Flip5',
                'price' => '4499',
                'description' => 'Charmingly compact and now with Flex Window',
                'category'=>"Smartphone",
                'gallery'=>'https://images.samsung.com/my/smartphones/galaxy-z-flip5/buy/product_color_mint.png?imwidth=480'
            ]
            
        ]);
    }
}

