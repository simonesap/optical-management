<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuesday extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'n_oridini_1',
        'n_ordini_2_8',
        'fatturato_ordini_1_8',
        'monofocali',
        'progressive',
        'antiriflesso',
        'busc',
        'premium',
        'qualità',
        'n_pezzi_sole',
        'sole_grad',
        'vendite_aggiuntive',
        'refrazioni',
        'conv_refra',
        'rx_mediche',
        'totale_n_ordini'
    ];
}
