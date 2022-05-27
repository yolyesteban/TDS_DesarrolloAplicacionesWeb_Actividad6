@extends('layout.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Categorías</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <!--<a href="#" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Nuevo</a>-->
                    <a href="/categorias/crear" class="btn btn-sm btn-outline-success">Nuevo</a>
                </div>
            </div>
        </div>

        <h2>Listado de Categorías</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Código</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Operaciones</th>
                </tr>
                </thead>
                @php
                    $contador = 0;
                @endphp
                <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{++$contador}}</td>
                        <td>{{$categoria->codigoCategoria}}</td>
                        <td>{{$categoria->nombre}}</td>
                        <td>
                            <div class="mt-1">
                                <a href="/categorias/{{$categoria->codigoCategoria}}/editar" class="btn btn-sm btn-outline-warning">Editar</a>
                                <a href="/categorias/{{$categoria->codigoCategoria}}/eliminar" class="btn btn-sm btn-outline-danger">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>


@endsection
