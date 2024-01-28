<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPack extends Model
{
    use HasFactory, SoftDeletes;

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'featured_event',
        'language',
        'foods',
        'departure_date',
        'duration',
        'type',
        'price',
    ];
}
