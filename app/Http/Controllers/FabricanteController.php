<?php

namespace App\Http\Controllers;

use App\Models\Fabricante;
use Illuminate\Http\Request;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('fabricante.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $fabricante = new Fabricante();
        return view('fabricante.create', compact('fabricante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate(Fabricante::$rules);

        $familia = Fabricante::create([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('fabricantes.index')
            ->with('success', 'Fabricante creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $familia = Fabricante::find($id);

        return view('fabricante.show', compact('fabricante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $fabricante = Fabricante::find($id);

        return view('fabricante.edit', compact('fabricante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fabricante $fabricante)
    {
        //
        request()->validate(Fabricante::$rules);
        $fabricante->update([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('fabricantes.index')->with('success', 'Familia Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $fabricante = Fabricante::find($id)->delete();
        return ($fabricante) ? 'Fabricante eliminado' : 'Error al eliminar';
    }
}
