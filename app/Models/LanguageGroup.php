<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class LanguageGroup extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['slug', 'langGroupName', 'id'];

    public function user()
    {
        return $this->belongsTo(LanguageGroup::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'langGroupName'
            ]
        ];
    }
}
