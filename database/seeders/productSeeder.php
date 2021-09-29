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
                'name' => 'samsung mobile',
                'price' => '35000',
                'category' => 'mobiles, samsung',
                'description' => 'The best mobile with 3gb ram, 12px camera, led screen and more',
                'gallery' => 'https://www.thechennaimobiles.com/image/cache/catalog/OPPO/6%20PRO-600x600.jpg'
            ],
            [
                'name' => 'oppo mobile',
                'price' => '25000',
                'category' => 'mobiles, oppo',
                'description' => 'The best mobile with 4gb ram, 16px camera, lcd screen and many more',
                'gallery' => 'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png'
            ],
            [
                'name' => 'samsung mobile',
                'price' => '75000',
                'category' => 'mobiles, samsung',
                'description' => 'The best mobile with 8gb ram, 16px camera, gorilla class screen and many more',
                'gallery' => 'https://images.samsung.com/is/image/samsung/p6pim/in/sm-a037fzbdins/gallery/in-galaxy-a03s-a037-sm-a037fzbdins-thumb-490358651?$320_320_PNG$'
            ],
            [
                'name' => 'panasonic tv',
                'price' => '29000',
                'category' => 'eletronics, panasonic',
                'description' => 'For those who do not want a "Full On Smart TV" this is an excellent alternative, particularly if one already has a "Set-Top Box" which provides all the necessary extra features up to a fully Smart version TV',
                'gallery' => 'https://www.lg.com/uk/images/tvs/MD05942377/gallery/medium01.jpg'
            ],
            [
                'name' => 'sony subboofer speeker',
                'price' => '12000',
                'category' => 'eletronics, sony',
                'description' => 'PP Mica reinforcement cap for louder bass, Acoustic distortion is minimised by a rubber surround',
                'gallery' => 'https://www.sony-mea.com/image/5d36e1f8c16703941764e656fb34293a?fmt=pjpeg&wid=660&hei=660&bgcolor=F1F5F9&bgc=F1F5F9'
            ],
        ]);
    }
}
