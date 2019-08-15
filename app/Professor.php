<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_professor';
    protected $table = 'professores';

    protected $fillable = [
        'nome', 'data_nascimento', 'data_criacao'
    ];

    public function cursos() {
        return $this->hasMany(Curso::class, 'id_professor');
    }
}
