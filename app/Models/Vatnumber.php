<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vatnumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'vat_n',
        'department_id'
    ];

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function store() {
        return $this->hasMany(Store::class);
    }
}
