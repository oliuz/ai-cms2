<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\User;

class Manga extends Model
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
                'source' => 'title'
            ]
        ];
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'id_manga');
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'id_uploader');
    }
}
