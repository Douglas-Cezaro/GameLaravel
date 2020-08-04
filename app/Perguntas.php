<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
    protected $fillable = ['pergunta'];
    

    public function respostas(){
        return $this->hasMany('App\Respostas', 'cod_pergunta', 'id');
    }
}
