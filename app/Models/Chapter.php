<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Chapter extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'chapter_title'
            ]
        ];
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'id_chapter');
    }

    public function manga()
    {
        return $this->belongsTo(Manga::class, 'id_manga');
    }
}
