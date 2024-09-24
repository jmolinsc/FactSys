<?php

namespace App\Http\Controllers;

use App\Models\Familia;
use Illuminate\Http\Request;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('familia.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $familia = new Familia();
        return view('familia.create', compact('familia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate(Familia::$rules);

        $familia = Familia::create([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('familias.index')
            ->with('success', 'Familia creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $familia = Familia::find($id);

        return view('familia.show', compact('familia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $familia = Familia::find($id);

        return view('familia.edit', compact('familia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Familia $familia)
    {
        //
        request()->validate(Familia::$rules);
        $familia->update([
            'nombre' => $request->nombre
        ]);

        return redirect()->route('familias.index')->with('success', 'Familia Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $familia = Familia::find($id)->delete();
        return ($familia) ? 'Familia eliminada' : 'Error al eliminar';
    }
}
