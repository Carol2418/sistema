@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <div class="table-responsive"></div>
        <table class="table table-bordered" >
            <thead >
            <tr>
                <td>NOMBRE</td>
                <td>{{$company->name}}</td>
            </tr>
            <tr>
                <td>NIT</td>
                <td>{{$company->nit}}</td>
            </tr>
            </thead>
        </table>
        <a href="{{route('companies.index')}}" class="btn btn-dark btn-sm">Volver al inicio</a>
        <a href="{{route('companies.edit', $company->id)}}" class="btn btn-dark  btn-sm">Editar Compañia</a>
    </div>



@endsection

