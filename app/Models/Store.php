<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_name',
        'slug',
        'address',
        'level'
    ];

    public function vat_number() {
        return $this->belongsTo(Vatnumber::class);
    }

    public function user() {
        return $this->hasMany(User::class)->where('user_id', Auth::users()->id)->get();
    }
}
