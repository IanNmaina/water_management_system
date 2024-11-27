<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterBill extends Model
{
    use HasFactory;

    // Define the fillable fields to allow mass assignment
    protected $casts = [
        'client_id',
        'current_reading',
        'rate',
        'amount_due',
        'billing_date' => 'datetime',
    ];

    // Define the relationship with the Client model
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
