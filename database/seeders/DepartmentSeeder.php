<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dep_name = [
            'Fielmann Italia',
            'Fielmann Germania'
        ];

        for($i=0; $i < 2; $i++){
            DB::table('department')->insert([
                'department_name' => $dep_name[$i],
            ]);
        };
    }
}
