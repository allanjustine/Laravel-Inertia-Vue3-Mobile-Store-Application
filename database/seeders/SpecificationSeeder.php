<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specification;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specifications = [
            [
                'cellphone_id' => 1,
                'android_version' => '8.1',
                'ram' => '3GB',
                'rom' => '32GB',
                'chipset' => 'Snapdragon 439',
                'camera' => '13MP',
                'price' => '7499',
                'battery' => '4030mAh'
            ],
            [
                'cellphone_id' => 2,
                'android_version' => '10',
                'ram' => '6GB',
                'rom' => '64GB',
                'chipset' => 'Helio G80',
                'camera' => '13MP',
                'price' => 6999,
                'battery' => '6000mAh'
            ],
            [
                'cellphone_id' => 3,
                'android_version' => '11',
                'ram' => '6GB',
                'rom' => '128GB',
                'chipset' => 'Helio G88',
                'camera' => '50MP',
                'price' => 8999,
                'battery' => '7000mAh'
            ],
            [
                'cellphone_id' => 4,
                'android_version' => 'N/A',
                'ram' => '6GB',
                'rom' => '128GB',
                'chipset' => 'Apple A15 Bionic',
                'camera' => '12MP',
                'price' => 5999,
                'battery' => '4352mAh'
            ],
            [
                'cellphone_id' => 5,
                'android_version' => '12',
                'ram' => '12GB',
                'rom' => '256GB',
                'chipset' => 'Snapdragon 8 Gen 1',
                'camera' => '108MP',
                'price' => 80990,
                'battery' => '5000mAh'
            ],
            [
                'cellphone_id' => 6,
                'android_version' => '12',
                'ram' => '16GB',
                'rom' => '256GB',
                'chipset' => 'Snapdragon 8+ Gen 1',
                'camera' => '50MP',
                'price' => 3230,
                'battery' => '4800mAh'
            ],
            [
                'cellphone_id' => 7,
                'android_version' => 'N/A',
                'ram' => '8GB',
                'rom' => '128GB',
                'chipset' => 'Snapdragon 888 4G',
                'camera' => '50MP',
                'price' => 39999,
                'battery' => '4360mAh'
            ],
            [
                'cellphone_id' => 8,
                'android_version' => '11',
                'ram' => '4GB',
                'rom' => '64GB',
                'chipset' => 'Snapdragon 680 4G',
                'camera' => '50MP',
                'price' => 9999,
                'battery' => '5000mAh'
            ],
        ];
        foreach($specifications as $s) {
            Specification::create($s);
        }
    }
}
