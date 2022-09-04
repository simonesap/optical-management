<?php/*

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MondaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function run()
    {
        $n_oridini_1 = [
            1,1,1,1,1
        ];

        $n_ordini_2_8 = [
            1,1,1,
        ];

        $fatturato_ordini_1_8 = [
            476.50
        ];

        $prezzo_medio_ordini_1_8 = [
            121.03
        ];

        $monofocali = [
            4
        ];

        $progressive = [
            11
        ];

        $antiriflesso = [
            11
        ];

        $busc = [
            3
        ];

        $premium = [
            2
        ];

        $qualità = [
            5
        ];

        $n_pezzi_sole = [
            14
        ];

        $sole_grad = [
            1
        ];

        $vendite_aggiuntive = [
            2
        ];

        $refrazioni = [
            2
        ];

        $conv_refra = [
            2
        ];

        $rx_mediche = [
            2
        ];

        $totale_n_ordinie = [
            2
        ];

        for($i = 0; $i < 5; $i++){
            DB::table('vat_number')->insert([
                'n_oridini_1' => $n_oridini_1[$i],
                'n_ordini_2_8' => $address[$i],
            ]);
        }
    }
}
