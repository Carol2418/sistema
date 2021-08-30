@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('companies.update', $company->id)}}" method="post">
            @csrf
            @method('PUT')
            <br>
            <div class="table-responsive"></div>
            <table class="table table-secondary" >
                <thead >
                <tr>
                    <td>NOMBRE</td>
                    <td><input type="text" class="Form-control" name="name" value="{{$company->name}}"></td>
                </tr>
                <tr>
                    <td>NIT</td>
                    <td><input type="text" class="Form-control" name="nit" value="{{$company->nit}}"></td>
                </tr>
                </thead>
            </table>
            <button type="submit" class="btn btn-dark  btn-sm">Guardar Compañia</button>
            <a href="{{route('companies.index')}}" class="btn btn-dark btn-sm">Volver al inicio</a>
        </form>

    </div>



@endsection

