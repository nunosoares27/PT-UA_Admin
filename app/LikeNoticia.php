<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeNoticia extends Model
{
    protected $fillable = [
        'id_noticia', 'user_id',
    ];

}
