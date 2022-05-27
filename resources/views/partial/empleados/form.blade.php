<form action="@if ($empleado->codigoEmpleado != null)
    /empleados/{{$empleado->codigoEmpleado}}/editar
@else
    /empleados/nuevo
@endif" method="post">

    {{csrf_field()}}

    <input type="hidden" id="codigoEmpleado" name="codigoEmpleado" value="{{$empleado->codigoEmpleado}}">

    <div class="row">
        <div class="col-sm-6">
            <label for="nit" class="form-label">NIT</label>
            <input type="text" class="form-control" id="nit" name="nit" placeholder="Nit" value="{{$empleado->nit}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="{{$empleado->nombres}}" required="">
        </div>

        <div class="col-sm-6">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="{{$empleado->apellidos}}" required="">
        </div>

        <div class="col-6">
            <label for="direccion" class="form-label">Direccion</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="{{$empleado->direccion}}" required="">
            </div>
        </div>

        <hr class="my-4">

        <input type="submit" class="w-100 btn btn-sm btn-outline-info" value="Guardar">
    </div>

</form>


