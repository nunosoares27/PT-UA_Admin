<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComentarioNoticia extends Model
{
    protected $fillable = [
        'id_noticia', 'TextoComentario', 'user_id'
    ];
}
