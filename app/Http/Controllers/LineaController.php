<?php

namespace App\Http\Controllers;

use App\Models\Linea;
use Illuminate\Http\Request;

class LineaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('linea.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $linea = new Linea();
        return view('linea.create', compact('linea'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate(Linea::$rules);
        $linea = Linea::create([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('lineas.index')
            ->with('success', 'Linea Creada Exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $linea = Linea::find($id);
        return view('linea.show', compact('linea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $linea = Linea::find($id);
        return view('linea.edit', compact('linea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Linea $linea)
    {
        //
        request()->validate(Linea::$rules);
        $linea->update([
            'nombre' => $request->nombre
        ]);


        return redirect()->route('lineas.index')->with('success', 'Linea Actualizada Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $linea = Linea::find($id)->delete();
        return ($linea) ? 'Linea Eliminada' : 'Error al eliminar';
    }
}
