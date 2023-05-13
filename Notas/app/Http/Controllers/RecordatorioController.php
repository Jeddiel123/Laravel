<?php

namespace App\Http\Controllers;

use App\Models\Recordatorio;
use Illuminate\Http\Request;

class RecordatorioController extends Controller
{
    
    public function index()
    {
        $user_id = auth()->id();
        $recordatorio = Recordatorio::where('id_usuario', $user_id)->get();
        return view('recordatorios.index')->with('recordatorio', $recordatorio);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Recordatorio $recordatorio)
    {
        //
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
