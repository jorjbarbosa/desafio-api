<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Http\Requests\CursoRequest;
use App\Professor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::with('alunos')->get();
        return response()->json(['data' => $cursos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CursoRequest $request)
    {
        $professor = Professor::findOrFail($request['id_professor']);
        $request['data_criacao'] = Carbon::now();
        $curso  = $professor->cursos()->create($request->all());

        return response()->json(['data' => $curso]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::findOrFail($id);
        return response()->json(['data' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso->update($request->all());
        return response()->json(['data' => $curso]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Curso::findOrfail($id);

        $curso->delete();

        return response()->json(['data' => $curso]);
    }
}
