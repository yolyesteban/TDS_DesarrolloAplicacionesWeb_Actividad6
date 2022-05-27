<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Empleado;
use App\Models\Producto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();

        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedido = new Pedido();
        $pedido->codigoPedido = null;

        $empleados = Empleado::all();
        $productos = Producto::all();

        return view('pedidos.new', compact(['pedido','empleados','productos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->cantidad = $request->cantidad;
        $pedido->codigoProducto = $request->codigoProducto;
        $pedido->codigoEmpleado = $request->codigoEmpleado;

        $pedido->save();

        return redirect('/pedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        $empleados = Empleado::all();
        $productos = Producto::all();

        return view('pedidos.edit', compact(['pedido','empleados','productos']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pedido = Pedido::find($request->codigoPedido);
        $pedido->cantidad = $request->cantidad;
        $pedido->codigoProducto = $request->codigoProducto;
        $pedido->codigoEmpleado = $request->codigoEmpleado;

        $pedido->save();

        return redirect('/pedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);

        $pedido->delete();

        return back();
    }
}
