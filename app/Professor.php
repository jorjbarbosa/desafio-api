<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_professor';

    public function cursos() {
        return $this->hasMany(Curso::class);
    }
}
