<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $primaryKey = 'id_aluno';
    public $timestamps = false;

    public function cursos() {
        return $this->belongsTo(Curso::class);
    }
}
