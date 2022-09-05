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

        $user_id = [
            1,
            2,
            3,
            4,
            5,
        ];

        $client_id = [
            1,
            2,
            3,
            4,
            5,
        ];

        for($i=0; $i < 5; $i++){
            DB::table('order')->insert([
                'product' => $products[$i],
                'sales_price' => $prices[$i],
                'user_id' => $user_id[$i],
                'client_id' => $client_id[$i],
            ]);
        }
    }
}
