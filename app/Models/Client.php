<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'address',
        'phone_number',
        'billing_information',
        'date_of_birth',
        'email',
        'optometric_card',
        'contactology_card',
        'glasses_envelopes',
        'supply_of_contact_lenses',
        'note',
        'appointments',
        'document',
        'Customer_Lifetime_Value',
        'shopping_preferences',
        'department_id',
    ];

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
}
