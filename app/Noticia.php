<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'user_id','noticiaHasImagem1', 'noticiaHasImagem2'
    ];


    // public function likes()
    // {
    //     return $this->hasManyThrough('App\LikeNoticia', 'App\User');
    // }

}
