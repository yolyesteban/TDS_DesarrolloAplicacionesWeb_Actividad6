@extends('layout.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Empleado</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <!--<a href="#" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Nuevo</a>-->
                    <a href="/empleados/crear" class="btn btn-sm btn-outline-success">Nuevo</a>
                </div>
            </div>
        </div>

        <h2>Listado de empleados</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Código Empleado</th>
                    <th scope="col">NIT</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Operaciones</th>
                </tr>
                </thead>
                @php
                    $contador = 0;
                @endphp
                <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{++$contador}}</td>
                        <td>{{$empleado->codigoEmpleado}}</td>
                        <td>{{$empleado->nit}}</td>
                        <td>{{$empleado->nombres}}</td>
                        <td>{{$empleado->apellidos}}</td>
                        <td>{{$empleado->direccion}}</td>
                        <td>
                            <div class="mt-1">
                                <a href="/empleados/{{$empleado->codigoEmpleado}}/editar" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="/empleados/{{$empleado->codigoEmpleado}}/eliminar" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>


@endsection
