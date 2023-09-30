<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venta = new Venta();
        return $venta->all();
        
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
            $venta = new Venta();

            $venta->fecha = $request->fecha;
            $venta->tipo_comprobante = $request->tipo_comprobante;
            $venta->serie = $request->serie;
            $venta->igv = $request->igv;
            $venta->estado = $request->estado;
           
            $venta->save();
            return $venta;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $id)
    {
        $venta = new Venta();
        return $venta->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id ,Request $request)
    {
        try {
            $venta = Venta::find($id);

            $venta->fecha = $request->fecha;
            $venta->tipo_comprobante = $request->tipo_comprobante;
            $venta->serie = $request->serie;
            $venta->igv = $request->igv;
            $venta->estado = $request->estado;
           
            $venta->save();
            return $venta;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $id)
    {
        $venta = venta::find($id);
        $venta->delete;
        return $venta;
    }
}
