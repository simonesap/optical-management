<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'James',
            'Silvio',
            'Ingrid',
            'Alessandro',
            'Timoteo'
        ];

        $surname = [
            'Jimmy',
            'Silvi',
            'Salvucci',
            'Bianchi',
            'Timo'
        ];

        $address = [
            'Via dei mille 14',
            'Via Campea 3',
            'Via Cola di Rienzo 9',
            'Via del Corso 89',
            'Viale Marconi 17'
        ];

        $phone_number = [
            '3251456897',
            '3498715236',
            '3331589756',
            '3275469861',
            '3398954231',
        ];

        $dateofbirth = [
            '1990/8/12',
            '1981/7/2',
            '1989/4/30',
            '1999/1/9',
            '1975/11/4',
        ];

        $email = [
            'ciao@mail.it',
            'test@test.com',
            'test2@test.com',
            'email@email.com',
            'test3@mail.com'
        ];

        for($i=0; $i < 5; $i++){
            DB::table('client')->insert([
                'name' => $name[$i],
                'surname' => $surname[$i],
                'address' => $address[$i],
                'phone_number' => $phone_number[$i],
                'date_of_birth' => $dateofbirth[$i],
                'email' => $email[$i],
            ]);
        }

    }
}
