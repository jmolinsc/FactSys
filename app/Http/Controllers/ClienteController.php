<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

/**
 * Class ClienteController
 * @package App\Http\Controllers
 */
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cliente.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente();
        return view('cliente.create', compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cliente::$rules);

        $cliente = Cliente::create([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'codigo' => $request->codigo,
            'dui' => $request->dui,
            'nit' => $request->nit,
            'nrc' => $request->nrc,
            'categoria' => $request->categoria,
            'familia' => $request->familia,
            'grupo' => $request->grupo,
            'giro' => $request->giro,
            'actividadeconomica' => $request->actividadeconomica,
            'email' => $request->email,
            'contacto' => $request->contacto,
            'pais' => $request->pais,
            'departamento' => $request->departamento,
            'municipio' => $request->municipio,
            'colonia' => $request->colonia,
            'regimenfiscal' => $request->regimenfiscal,
            'tipo' => $request->tipo,
            'estatus' => $request->estatus
        ]);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        request()->validate(Cliente::$rules);

        $cliente->update(
            [
                'nombre' => $request->nombre,
                'telefono' => $request->telefono,
                'direccion' => $request->direccion,
                'codigo' => $request->codigo,
                'dui' => $request->dui,
                'nit' => $request->nit,
                'nrc' => $request->nrc,
                'categoria' => $request->categoria,
                'familia' => $request->familia,
                'grupo' => $request->grupo,
                'giro' => $request->giro,
                'actividadeconomica' => $request->actividadeconomica,
                'email' => $request->email,
                'contacto' => $request->contacto,
                'pais' => $request->pais,
                'departamento' => $request->departamento,
                'municipio' => $request->municipio,
                'colonia' => $request->colonia,
                'regimenfiscal' => $request->regimenfiscal,
                'tipo' => $request->tipo,
                'estatus' => $request->estatus
            ]
        );

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id)->delete();
        return ($cliente) ? 'Cliente eliminado' : 'Error al eliminar';
    }
}
