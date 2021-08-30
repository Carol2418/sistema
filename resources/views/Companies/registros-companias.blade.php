@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('companies.create')}}" class="btn btn-secondary  btn-sm mb-3 mt-3">Crear Nueva Compañia</a>
        <br>
        <div class="table-responsive"></div>
        <table class="table table-striped">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>NIT</th>
                <th>ACCIONES</th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->nit}}</td>
                    <td>
                        <form action="{{route('companies.destroy', $company->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('companies.show',$company->id)}}" class="btn btn-secondary btn-sm">Detalles</a>
                            <a href="{{route('companies.edit',$company->id)}}" class="btn btn-secondary btn-sm">Editar</a>
                            <button type="submit" class="btn btn-secondary btn-sm">Eliminar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection
