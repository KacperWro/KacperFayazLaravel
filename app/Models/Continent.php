<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Continent extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['continentName', 'slug'];

    public function user()
    {
        return $this->belongsTo(Continent::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'continentName'
            ]
        ];
    }
}
