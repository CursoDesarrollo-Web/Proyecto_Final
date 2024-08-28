@extends('layout/plantilla')

@section('TituloPagina','Inventario')

@section('contenido')
    <br><br>
    <div class="card">
    <h5 class="card-header">Materia Prima</h5>
        <div class="card-body">
            <h5 class="card-title">Inventario Materia Prima</h5>
            <p>
                <a href="{{ route('materiasprimas.create') }}" class="btn btn-primary">Agregar Materia Prima</a>
            </p>
            <hr>
            <p class="card-text">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Unidad de Medida</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Proveedor</th>
                            <th>Fecha de Adquision</th>
                            <th>Fecha de Adquision</th>
                            <th>Fecha de Vencimiento</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                        @foreach($datos as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->unidad_medida }}</td>
                            <td>{{ $item->cantidad }}</td>
                            <td>{{ $item->precio_unitario }}</td>
                            <td>{{ $item->Proveedor}}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->fecha_adquisicion }}</td>
                            <td>{{ $item->fecha_expiracion }}</td>
                            <td>{{ $item->estado }}</td>
                            <td></td>
                            <td></td>
                        </tr>                        
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </p> 
        </div>
    </div>
@endsection