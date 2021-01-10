@extends('layouts.app')

@section('link_activo_clientes')
    active
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <table id="table_clientes" class="table table-bordered table-hover table-striped">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Código</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cédula</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->codigo}}</td>
                                <td>{{$cliente->nombres}}</td>
                                <td>{{$cliente->apellidos}}</td>
                                <td>{{$cliente->cedula}}</td>
                                <td>{{$cliente->telefono}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/clientes/index.js') }}"></script>
@endpush