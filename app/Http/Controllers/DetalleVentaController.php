<?php

namespace App\Http\Controllers;

use App\Models\Detalle_venta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalle_venta = new Detalle_venta();
        return $detalle_venta->all();
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
            $detalle_venta = new Detalle_venta();

            $detalle_venta->cantidad = $request->cantidad;
            $detalle_venta->precio_venta = $request->precio_venta;
            $detalle_venta->descuento = $request->descuento;
          
           
            $detalle_venta->save();
            return $detalle_venta;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $detalle_venta = new Detalle_venta();
        return $detalle_venta->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id ,Request $request)
    {
        try {
            $detalle_venta = Detalle_venta::find($id);

            $detalle_venta->cantidad = $request->cantidad;
            $detalle_venta->precio_venta = $request->precio_venta;
            $detalle_venta->descuento = $request->descuento;
          
           
            $detalle_venta->save();
            return $detalle_venta;

        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detalle_venta $detalle_venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detalle_venta $id)
    {
        $detalle_venta = Detalle_venta::find($id);
        $detalle_venta->delete;
        return $detalle_venta;
    }
}
