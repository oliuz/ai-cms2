<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    public function pages()
    {
        return $this->hasMany(Page::class, 'id_chapter');
    }

    public function manga()
    {
        return $this->belongsTo(Manga::class, 'id_manga');
    }
}
