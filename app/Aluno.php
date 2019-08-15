<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $primaryKey = 'id_aluno';
    public $timestamps = false;
    protected $fillable = [
        'nome', 'data_nascimento', 'logradouro', 'numero', 'bairro',
        'cidade', 'estado', 'data_criacao', 'cep', 'id_curso'
    ];

    public function curso() {
        return $this->belongsTo(Curso::class);
    }
}
