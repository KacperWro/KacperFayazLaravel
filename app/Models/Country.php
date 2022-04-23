<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['slug', 'continent', 'countryName', 'capital', 'population', 'area', 'popDensity', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'countryName'
            ]
        ];
    }
}
