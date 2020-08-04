<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respostas extends Model
{
    protected $fillable = ['descricao', 'cod_pergunta', 'flagCerto'];

    public function perguntaFuncao(){
    	return $this->belongsTo('App\Perguntas', 'cod_pergunta', 'id');
    }
}
