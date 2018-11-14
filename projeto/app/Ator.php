<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{

    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = "ultima_atualizacao";

    protected $table = 'ator';
    protected $primaryKey = 'ator_id';
    protected $fillable = ['primeiro_nome','ultimo_nome'];

    public function getNomeCompleto()
    {
      return $this->primeiro_nome . ' ' . $this->ultimo_nome;
    }

    public function filmes()
    {
      return $this->belongsToMany(Filme::class, 'filme_ator', 'filme_id', 'ator_id');
      //primeiro: classe que quer fazer a conexao
      //segundo: tabela que tem a relacao entre filme e ator. NAO PRECISA TER ELA COMO MODEL
      //terceiro: qual é o nome do campo em filme(primeiro campo)
      //quarto: campo da tabela atual (ator) que relaciona com filme
    }
}
