<?php

namespace App\Http\Controllers;

use App\Models\Recordatorio;
use Illuminate\Http\Request;

class RecordatorioController extends Controller
{

    public function index()
    {
        $user_id = auth()->id();
        $recordatorios = Recordatorio::where('id_usuario', $user_id)->get();
        return view('recordatorios.index')->with('recordatorios', $recordatorios);
    }

    public function create()
    {
        return view('recordatorios.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required'],
            'contenido' => ['required', 'min:10'],
            'importancia' => ['required'],
            'fecha' => ['required']
        ]);

        $user_id = auth()->id();

        $recordatorio = new Recordatorio;
        $recordatorio->titulo = $request->titulo;
        $recordatorio->contenido = $request->contenido;
        $recordatorio->importancia = $request->importancia;
        $recordatorio->fecha = $request->fecha;
        $recordatorio->id_usuario = $user_id;
        $recordatorio->save();
        return redirect('recordatorios')->with('flash_message', 'Recordatorio Addedd!');
    }

    public function show($id)
    {
        $recordatorio = Recordatorio::find($id);

        return view('recordatorios.mostrar')->with([
            'recordatorio' => $recordatorio,
        ]);
    }

    public function edit(Recordatorio $recordatorio)
    {
        //
    }

    public function update(Request $request, Recordatorio $recordatorio)
    {
        //
    }

    public function destroy(Recordatorio $recordatorio)
    {
        //
    }
}
