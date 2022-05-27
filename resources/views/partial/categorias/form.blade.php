<form action="@if ($categoria->codigoCategoria != null)
    /categorias/{{$categoria->codigoCategoria}}/editar
@else
    /categorias/nuevo
@endif" method="post">

    {{csrf_field()}}

    <input type="hidden" id="codigoCategoria" name="codigoCategoria" value="{{$categoria->codigoCategoria}}">

    <div class="row">

        <div class="col-12">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$categoria->nombre}}" required="">
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>

</form>


