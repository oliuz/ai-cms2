<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Manga extends Model
{
    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'id_manga');
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'id_uploader');
    }
}
