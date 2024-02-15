<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function travelPackage()
    {
        return $this->belongsTo(TravelPack::class);
    }

    protected $fillable = [
        'travel_packages_id',
        'user_id',
        'additional_visa',
        'transaction_total',
        'transaction_status',
    ];
}
