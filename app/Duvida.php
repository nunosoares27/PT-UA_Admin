<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duvida extends Model
{
     protected $fillable = [
        'pergunta', 'descricao', 'user_id'
    ];

     public function autor()
    {
        return $this->belongsTo('App\User');
    }

}
