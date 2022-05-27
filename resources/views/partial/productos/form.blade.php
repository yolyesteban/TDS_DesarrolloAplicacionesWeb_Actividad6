<form action="@if ($producto->codigoProducto != null)
    /productos/{{$producto->codigoProducto}}/editar
@else
    /productos/nuevo
@endif" method="post">

    {{csrf_field()}}

    <input type="hidden" id="codigoProducto" name="codigoProducto" value="{{$producto->codigoProducto}}">

    <div class="row">
        <div class="col-sm-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$producto->nombre}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción del Producto" value="{{$producto->descripcion}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="stock" class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="stock" name="stock" placeholder="Cantidad en stock" value="{{$producto->stock}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="codigoCategoria" class="form-label">Categoria</label>
            <select id="codigoCategoria" name="codigoCategoria"  class="form-control">
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->codigoCategoria}}" @if ($producto->codigoCategoria == $categoria->codigoCategoria) selected @endif >{{$categoria->nombre}}</option>
                @endforeach
            </select>
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>

</form>


