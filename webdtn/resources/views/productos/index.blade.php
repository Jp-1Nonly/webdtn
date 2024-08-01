@extends('layoutuse.app')
@section('contenidogeneral')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-primary" href="{{route('addproductos')}}">Agregar un producto</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered border-primary" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto['id'] }}</td>
                        <td>{{ $producto['nombre'] }}</td>
                        <td>{{ $producto['descripcion'] }}</td>
                        <td>{{ $producto['precio'] }}</td>
                        <td>
                            <a class="btn btn-dark" href="">Editar</a>
                        </td>
                        <td>
                            <form id="delete-form-{{ $producto['id'] }}" action="{{ route('eliminarproductos', $producto['id']) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
