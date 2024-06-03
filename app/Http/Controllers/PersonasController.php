<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Personas::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'fecha_nacimiento' => 'required|date',
        ]);

        Personas::create($request->all());

        return redirect()->route('personas.index')
                         ->with('success', 'Persona creada exitosamente.');
    }

    public function show(Personas $persona)
    {
        return view('personas.show', compact('persona'));
    }

    public function edit(Personas $persona)
    {
        return view('personas.edit', compact('persona'));
    }


    public function update(Request $request, Personas $persona)
    {
        $request->validate([
            'nombre' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'fecha_nacimiento' => 'required|date',
        ]);

        $persona->update($request->all());

        return redirect()->route('personas.index')
                         ->with('success', 'Persona actualizada exitosamente');
    }

    public function destroy(Personas $persona)
    {
        $persona->delete();

        return redirect()->route('personas.index')
                         ->with('success', 'Persona eliminada exitosamente');
    }
}