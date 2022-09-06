<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    use HasFactory;

    public function monday() {
        return $this->hasOne(Monday::class);
    }

    public function tuesday() {
        return $this->hasOne(Tuesday::class);
    }

    public function wednesday() {
        return $this->hasOne(Wednesday::class);
    }

    public function thursday() {
        return $this->hasOne(Thursday::class);
    }

    public function friday() {
        return $this->hasOne(Friday::class);
    }

    public function saturday() {
        return $this->hasOne(Saturday::class);
    }

    public function sunday() {
        return $this->hasOne(Sunday::class);
    }
}
