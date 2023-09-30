<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulo = new Articulo();
        return $articulo->all();
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
            $articulo = new Articulo();

            $articulo->codigo = $request->codigo;
            $articulo->nombre = $request->nombre;
            $articulo->descripcion = $request->descripcion;
          
           
            $articulo->save();
            return $articulo;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Articulo $id)
    {
        $articulo = new Articulo();
        return $articulo->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        try {
            $articulo = Articulo::find($id);

            $articulo->codigo = $request->codigo;
            $articulo->nombre = $request->nombre;
            $articulo->descripcion = $request->descripcion;
          
           
            $articulo->save();
            return $articulo;

        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articulo $id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete;
        return $articulo;
    }
}
