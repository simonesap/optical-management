<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Department;

class VatnumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vat_n = [
            'IT86334519757',
            'IT86234516757',
            'IT87834513757',
            'IT86534911757',
            'IT86535513727'
        ];

        $dep_id = [
            1,2,1,2,2
        ];

        // $department = new Department();

        for($i = 0; $i < 5; $i++){
            DB::table('vat_number')->insert([
                'vat_n' => Hash::make($vat_n[$i]),
                'department_id' => $dep_id[$i],
                // 'department_id' => DB::table('department','id')->get(),
                // 'department_id' => $department['id'],
                // 'department_id' => Department::table('id'),
            ]);
        }
    }
}
