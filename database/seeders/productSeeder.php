<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productSeeder extends Seeder
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
                'name' => 'Apple mobile',
                'price' => '85000',
                'category' => 'mobiles',
                'description' => 'Apple red iPhone 11 64GB, Battery Capacity: 3110, 12MP best price in the market',
                'gallery' => 'https://5.imimg.com/data5/SELLER/Default/2021/1/LV/VX/EG/14753644/iphone11--500x500.jpg'
            ],
            [
                'name' => 'samsung refrigerator',
                'price' => '95000',
                'category' => 'electronics',
                'description' => 'Specification:, Brand: Samsung, Capacity: 615 ltr, Dimension (W x H x D): 908 x 1825 x 733, Cooling features: No frost, Twin',
                'gallery' => 'https://bowealth.com.ng/wp-content/uploads/2018/11/samsung_refrigerator_615_ltr_rh57h8231sa_2.jpg'
            ],
            [
                'name' => 'lg refrigerator',
                'price' => '78000',
                'category' => 'electronics',
                'description' => 'https://image.freepik.com/free-vector/red-black-open-refrigerator-with-products_1284-23311.jpg',
                'gallery' => 'https://image.freepik.com/free-vector red-black-open-refrigerator-with-products_1284-23311.jpg'
            ],
            [
                'name' => 'xiomi rice cooker',
                'price' => '12500',
                'category' => 'electronics',
                'description' => '0-cup capacity 1.8L jar type rice cooker Energy-saving and convenient  30% thicker inner pan keeps rice warmer longer Special honeycomb pattern makes rice stick less to the bottom of the pan',
                'gallery' => 'https://toughmamaappliances.com/wp-content/uploads/2019/11/KRC18-J-HC-2.png'
            ],
        ]);
    }
}
