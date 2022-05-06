<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Country extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['slug', 'continent', 'countryName', 'capital', 'population', 'area', 'popDensity', 'history', 'culture', 'food', 'tourism', 'user_id', 'continentID', 'languageID'];

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

    public function post()
    {
        return $this->hasMany(CommentCountry::class);
    }

}
