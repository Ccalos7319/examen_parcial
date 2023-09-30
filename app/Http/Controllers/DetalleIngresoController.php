<?php

namespace App\Http\Controllers;

use App\Models\Detalle_ingreso;
use Illuminate\Http\Request;

class DetalleIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detalle_ingreso = new Detalle_ingreso();
        return $detalle_ingreso->all();
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
            $detalle_ingreso = new Detalle_ingreso();

            $detalle_ingreso->precio_compra = $request->precio_compra;
            $detalle_ingreso->precio_venta = $request->precio_venta;
            $detalle_ingreso->stock_inicial = $request->stock_inicial;
            $detalle_ingreso->stock_actual = $request->stock_actual;
            $detalle_ingreso->fecha_produccion = $request->fecha_produccion;
            $detalle_ingreso->fecha_vencimiento = $request->fecha_vencimiento;
          
           
            $detalle_ingreso->save();
            return $detalle_ingreso;
        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Detalle_ingreso $id)
    {
        $detalle_ingreso = new Detalle_ingreso();
        return $detalle_ingreso->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        try {
            $detalle_ingreso = Detalle_ingreso::find($id);

            $detalle_ingreso->precio_compra = $request->precio_compra;
            $detalle_ingreso->precio_venta = $request->precio_venta;
            $detalle_ingreso->stock_inicial = $request->stock_inicial;
            $detalle_ingreso->stock_actual = $request->stock_actual;
            $detalle_ingreso->fecha_produccion = $request->fecha_produccion;
            $detalle_ingreso->fecha_vencimiento = $request->fecha_vencimiento;
          
           
            $detalle_ingreso->save();
            return $detalle_ingreso;

        } catch (\Exception $th) {
            return json_encode($th);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detalle_ingreso $detalle_ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detalle_ingreso = Detalle_ingreso::find($id);
        $detalle_ingreso->delete;
        return $detalle_ingreso;
    }
}
