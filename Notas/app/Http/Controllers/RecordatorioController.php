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
        //
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
