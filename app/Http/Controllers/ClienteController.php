<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = new Cliente();
        return $cliente->all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $cliente = new Cliente();
            $cliente->nombre = $request->nombre;
            $cliente->apellido = $request->apellido;
            $cliente->sexo = $request->sexo;
            $cliente->fecha_nacimiento = $request->fecha_nacimiento;
            $cliente->tipo_documento = $request->tipo_documento;
            $cliente->num_documento = $request->num_documento;
            $cliente->direccion = $request->direccion;
            $cliente->telefono = $request->telefono;
            $cliente->email = $request->email;
            $cliente->save();
            return $cliente;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $id)
    {
        $cliente = new Cliente();
        return $cliente->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $id, Request $request)
    {
        try {
            $cliente = Cliente::find($id);
            $cliente->nombre = $request->nombre;
            $cliente->apellido = $request->apellido;
            $cliente->sexo = $request->sexo;
            $cliente->fecha_nacimiento = $request->fecha_nacimiento;
            $cliente->tipo_documento = $request->tipo_documento;
            $cliente->num_documento = $request->num_documento;
            $cliente->direccion = $request->direccion;
            $cliente->telefono = $request->telefono;
            $cliente->email = $request->email;
            $cliente->save();
            return $cliente;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete;
        return $cliente;
    }
}
