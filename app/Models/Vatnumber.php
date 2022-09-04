<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vatnumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'vat_n',
    ];

//     public function store() {
//         return $this->belongsTo('App\Models\Store');
//     }
}
