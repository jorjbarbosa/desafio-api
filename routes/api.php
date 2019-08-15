<?php

use Illuminate\Http\Request;

Route::apiResource('professores', 'ProfessorController');
Route::apiResource('cursos', 'CursoController');
Route::apiResource('alunos', 'AlunoController');
