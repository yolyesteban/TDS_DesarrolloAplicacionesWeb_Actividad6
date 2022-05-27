<form action="@if ($pedido->codigoPedido != null)
    /pedidos/{{$pedido->codigoPedido}}/editar
@else
    /pedidos/nuevo
@endif" method="post">

    {{csrf_field()}}

    <input type="hidden" id="codigoPedido" name="codigoPedido" value="{{$pedido->codigoPedido}}">

    <div class="row">
        <div class="col-4">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" value="{{$pedido->cantidad}}" required="">
        </div>

        <div class="col-4">
            <label for="codigoProducto" class="form-label">Productos</label>
            <select id="codigoProducto" name="codigoProducto" class="form-control" required>
                @foreach ($productos as $producto)
                    <option value="{{$producto->codigoProducto}}" @if ($pedido->codigoProducto == $producto->codigoProducto) selected @endif >{{$producto->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-4">
            <label for="codigoEmpleado" class="form-label">Empleados</label>
            <select id="codigoEmpleado" name="codigoEmpleado" class="form-control" required>
                @foreach ($empleados as $empleado)
                    <option value="{{$empleado->codigoEmpleado}}" @if ($pedido->codigoEmpleado == $empleado->codigoEmpleado) selected @endif >{{$empleado->nombres.' '.$empleado->apellidos}}</option>
                @endforeach
            </select>
        </div>


        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>

</form>


