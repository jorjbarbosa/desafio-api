<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_curso';

    protected $fillable = ['nome', 'data_criacao', 'id_professor'];

    public function professor() {
        return $this->belongsTo(Professor::class, 'id_curso');
    }
    public function alunos() {
        return $this->hasMany(Alunos::class);
    }
}
