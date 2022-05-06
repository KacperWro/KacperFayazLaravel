<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class CommentLanguage extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['commentContent', 'slug'];

    public function user()
    {
        return $this->belongsTo(Language::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'commentContent'
            ]
        ];
    }
}
