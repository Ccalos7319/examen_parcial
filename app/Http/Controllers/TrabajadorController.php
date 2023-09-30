<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trabajador = new Trabajador();
        return $trabajador->all();
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
            $trabajador = new Trabajador();

            $trabajador->nombre = $request->nombre;
            $trabajador->apellido = $request->apellido;
            $trabajador->sexo = $request->sexo;
            $trabajador->fecha_nacimiento = $request->fecha_nacimiento;
            $trabajador->num_documento = $request->num_documento;
            $trabajador->direccion = $request->direccion;
            $trabajador->telefono = $request->telefono;
            $trabajador->email = $request->email;
            $trabajador->password = $request->password;
           
            $trabajador->save();
            return $trabajador;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabajador $id)
    {
       
        $trabajador = new Trabajador();
        return $trabajador->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        try {
            $trabajador = Trabajador::find($id);

            $trabajador->nombre = $request->nombre;
            $trabajador->apellido = $request->apellido;
            $trabajador->sexo = $request->sexo;
            $trabajador->fecha_nacimiento = $request->fecha_nacimiento;
            $trabajador->num_documento = $request->num_documento;
            $trabajador->direccion = $request->direccion;
            $trabajador->telefono = $request->telefono;
            $trabajador->email = $request->email;
            $trabajador->password = $request->password;
           
            $trabajador->save();
            return $trabajador;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trabajador $trabajador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trabajador = Trabajador::find($id);
        $trabajador->delete;
        return $trabajador;
    }
}
