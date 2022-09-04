<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            'Ray-Ban Sunglusses',
            'Prada Sunglusses',
            'Lac',
            'Ray-Ban Glusses',
            'Versace Sunglusses',
            'Fielmann Glusses',
            'Hoya Filters',
            'Persol Glusses'
        ];

        $prices = [
            130.50,
            243.25,
            327.90,
            110.43,
            368.99,
            25,
            247.50,
            140
        ];

        for($i=0; $i < 8; $i++){
            DB::table('order')->insert([
                'product' => $products[$i],
                'sales_price' => $prices[$i]
            ]);
        }
    }
}
