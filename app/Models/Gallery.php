<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function travelPackage()
    {
        return $this->belongsTo(TravelPack::class);
    }

    protected $fillable = [
        'travel_pack_id',
        'image'
    ];
}
