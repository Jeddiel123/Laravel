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
        $user_id = auth()->id();

        $nota = new Nota;
        $nota->titulo = $request->titulo;
        $nota->contenido = $request->contenido;
        $nota->p_clave = $request->p_clave;
        $nota->resumen = $request->resumen;
        $nota->id_usuario = $user_id;
        $nota->id_tema = $request->tema;
        $nota->save();
        return redirect('notas')->with('flash_message', 'Nota Addedd!');
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
