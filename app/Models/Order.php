<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'product',
        'sales_price'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function monday() {
        return $this->belongsTo(Monday::class);
    }

    public function tuesday() {
        return $this->belongsTo(Tuesday::class);
    }

    public function wednesday() {
        return $this->belongsTo(Wednesday::class);
    }

    public function thursday() {
        return $this->belongsTo(Thursday::class);
    }

    public function friday() {
        return $this->belongsTo(Friday::class);
    }

    public function saturday() {
        return $this->belongsTo(Saturday::class);
    }

    public function sunday() {
        return $this->belongsTo(Sunday::class);
    }
}
