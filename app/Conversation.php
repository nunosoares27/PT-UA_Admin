<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public $timestamps = false;
     protected $fillable = [
        'utilizador_nome', 'utilizador_id', 'utilizador_mensagem'
    ];
}
