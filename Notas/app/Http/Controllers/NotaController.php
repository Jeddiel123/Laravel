<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Nota;
use App\Models\Tema;
use Illuminate\Http\Request;

class NotaController extends Controller
{

    public function index()
    {
        $user_id = auth()->id();
        $notas = Nota::where('id_usuario', $user_id)->get();

        return view('notas.index')->with([
            'notas' => $notas,
        ]);
    }

    public function create()
    {
        $asignaturas = Asignatura::where('id_carrera', auth()->user()->id_carrera)->get();
        $temas = Tema::whereIn('id_asignatura', $asignaturas->pluck('id'))->get();
        return view('notas.crear', compact('temas', 'asignaturas'));
    }

    public function store(Request $request)
    {
        //
    }
    public function show(Nota $nota)
    {
        //
    }

    public function edit(Nota $nota)
    {
        //
    }

    public function update(Request $request, Nota $nota)
    {
        //
    }

    public function destroy(Nota $nota)
    {
        //
    }
}
