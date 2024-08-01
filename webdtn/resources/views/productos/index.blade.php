@extends('layoutuse.app')
@section('contenidogeneral')

<table>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">PRODUCTOS</h6>

        
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>DESCRIPCION</th>
                            <th>PRECIO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $productos as $producto )
                        
                            <tr>
                                <td>{{$producto['id']}}</td>
                                <td>{{$producto['nombre']}}</td>
                                <td>{{$producto['descripcion']}}</td>
                                <td>{{$producto['precio']}}</td>
                                <td><H5>eliminar - editar</H5></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </>
    </div>
</table>

@endsection