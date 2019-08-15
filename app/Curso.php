<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_curso';

    public function professor() {
        return $this->belongsTo(Professor::class);
    }
    public function alunos() {
        return $this->hasMany(Alunos::class);
    }
}
