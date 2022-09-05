<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names = [
            'Luca',
            'Alessandro',
            'Marco',
            'Luigi',
            'Temistocle'
        ];

        $surnames = [
            'Lucchetti',
            'Alessi',
            'Marchetti',
            'Bianchi',
            'Sterli'
        ];

        $emails = [
            'lucchi7@gmail.com',
            'alessi44@gmail.com',
            'marchette3@icloud.com',
            'bianchastro@icloud.com',
            'sterlina@gmail.com'
        ];

        $passwords = [
            'password',
            'password',
            'password',
            'password',
            'password',
        ];

        $store = [
            1,
            2,
            3,
            4,
            5,
        ];

        for($i = 0; $i < 5; $i++){
            DB::table('users')->insert([
                'name' => $names[$i],
                'surname' =>  $surnames[$i],
                'email' => $emails[$i],
                'password' => Hash::make($passwords[$i]),
                'store_id' => $store[$i],
            ]);
        }

    }
}
