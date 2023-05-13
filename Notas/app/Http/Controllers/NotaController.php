<?php

namespace App\Http\Controllers;

use App\Models\Nota;
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
        //
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
