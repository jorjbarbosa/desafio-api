<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Professor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professor::with('cursos')->get();
        return response()->json(['data' => $professores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfessorRequest $request)
    {
        $request['data_criacao'] = Carbon::now();
        $professor = Professor::create($request->all());

        return response()->json(['data' => $professor]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::with('cursos')->findOrFail($id);
        return response()->json(['data' => $professor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfessorRequest $request, $id)
    {
        $professor = Professor::findOrFail($id);

        $professor->update($request->all());
        return response()->json(['data' => $professor]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professor = Professor::findOrFail($id);
        $professor->delete();
        return response()->json(['data' => $professor]);
    }
}
