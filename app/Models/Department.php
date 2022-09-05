<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name'
    ];

    public function vat_number() {
        return $this->hasMany(Vatnumber::class);
        // ->where('vat_number_id', Vatnumber::department()->id)->get();
    }

    public function warehouse() {
        return $this->hasOne(Warehouse::class);
        // ->where('vat_number_id', Vatnumber::department()->id)->get();
    }

    public function client() {
        return $this->hasMany(Client::class);
    }
}
