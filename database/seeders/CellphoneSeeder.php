<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cellphone;

class CellphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cellphones = [
            [
                'brand_name' => 'Vivo',
                'model' => 'Y91'
            ],

            [
                'brand_name' => 'Tecno',
                'model' => 'LD7'
            ],
            [
                'brand_name' => 'Tecno',
                'model' => 'Pova 3'
            ],
            [
                'brand_name' => 'Apple',
                'model' => 'iPhone 13 Pro Max'
            ],
            [
                'brand_name' => 'Samsung',
                'model' => 'Galaxy S22 Ultra 5G'
            ],
            [
                'brand_name' => 'OnePlus',
                'model' => '10T'
            ],
            [
                'brand_name' => 'Huawei',
                'model' => 'P50 Pro'
            ],
            [
                'brand_name' => 'Xiaomi',
                'model' => 'Redmi Note 11'
            ]
        ];
        foreach($cellphones as $c) {
            Cellphone::create($c);
        }
    }
}
