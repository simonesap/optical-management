<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Store;


class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store_name = [
            'Fielmann Roma Est',
            'Fielmann Cola di Rienzo',
            'Fielman Marconi',
            'Fielmann Firenze',
            'Fielmann Milano'
        ];

        $address = [
            'Via Collatina Km 12.800, 00132 Roma RM',
            'Via Cola di Rienzo, 123, 00192 Roma RM',
            'Viale Guglielmo Marconi, 130, 00146 Roma RM',
            'Piazza Gavinana, 1, 51100 Pistoia PT',
            'Corso Vercelli, 13, 20144 Milano MI'
        ];

        $level = [
            'platinum',
            'silver',
            'silver',
            'gold',
            'platinum'
        ];


        for($i = 0; $i < 5; $i++){

            // $store = new Store();

            DB::table('store')->insert([
                'store_name' => $store_name[$i],
                // 'slug' => Str::slug($store->store_name, '-'),
                'address' => $address[$i],
                'level' => $level[$i]
            ]);
        }
    }
}
