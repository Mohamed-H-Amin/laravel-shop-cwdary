<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'        =>'OPPO Reno6',
                'details'     =>'AI Portrait | Air Gestures | 50W Flash Charge | RAM',
                'descritpion' =>'
                8GB RAM + 128GB ROM
                RAM Type: LPDDR4x @ 1866 MHz, 2 x 16 bits
                External Memory: Supported
                USB Version: USB 2.0
                USB OTG: Supported',
                'brand'       =>'opoo',
                'price'       =>1200,
                'shipping'    =>25,
                'image_url'   =>'storage/product1.png'
            ],
            [
                'name'        =>'OPPO A16K',
                'details'     =>'3D Sleek Design HD+ Eye-care Screen | 4230mAh Long-lasting Battery',
                'descritpion' =>'Size: 6.4‘’
                Screen Ratio: 91.70%
                Resolution: 2400 x 1080 (FHD+)
                Refresh Rate: Maximum: 90 Hz / Options: 90 Hz or 60 Hz
                Touch Sampling Rate: Maximum: 180 Hz (2 fingers) / Default: 120 Hz (5 fingers)
                Colour Gamut: Vivid mode: 93.28% DCI-P3, 135.13% sRGB / Gentle mode: 73.72% DCI-P3, 100% sRGB',
                'brand'       =>'opoo',
                'price'       =>6000,
                'shipping'    =>25,
                'image_url'   =>'storage/product2.png'
            ],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
