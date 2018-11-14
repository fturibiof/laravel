<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamp = false;
    const CREATED_AT = null;
    const UPDATED_AT = "ultima_atualizacao";

    protected $table = 'categoria';
    protected $primaryKey = 'categoria_id';
    protected $fillable = ['nome'];
}
