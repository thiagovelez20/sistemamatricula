<?php

namespace App\Http\Controllers;

use App\Models\matricula;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValueMap;

class matriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matricula = Matricula::all();
        return response()->json($matricula);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matricula = Matricula::create($request->post());
        return response()->json([
            'matricula'=>$matricula
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(matricula $matricula)
    {
        return response()->json($matricula);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matricula $matricula)
    {
        $matricula->fill($request->post())->save();
        return response()->json(['matricula'=>$matricula ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(matricula $matricula)
    {
        $matricula->delete();
        return response()->json(['Mensaje' => 'Asignatura eliminada']);

    }
}
