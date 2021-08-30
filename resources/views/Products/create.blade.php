@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="col-md-6 offset-md-3"></div>
        <form action="{{route('products.store')}}" method="post">
            @csrf
            <div class="table-responsive"></div>
            <table class="table table-secondary" >
                <thead >
                <tr>
                    <td>NOMBRE</td>
                    <td><input type="text" class="Form-control" name="name" value=""></td>
                </tr>
                <tr>
                    <td>DESCRPTIÓN</td>
                    <td><input type="text" class="Form-control" name="description" value=""></td>
                </tr>
                <tr>
                    <td>PRECIO</td>
                    <td><input type="text" class="Form-control" name="price" value=""></td>
                </tr>
                <tr>
                    <td>IMAGEN</td>
                    <td><input type="file" class="Form-control" name="image" value=""></td>
                </tr>
                <tr>
                    <td>COMPAÑIA</td>
                    <td><input type="text" class="Form-control" name="companies_id" value=""></td>
                </tr>
                </thead>
            </table>
            <button type="submit" class="btn btn-dark  btn-sm">Guardar Producto</button>
            <a href="{{route('products.index')}}" class="btn btn-dark btn-sm">Volver al inicio</a>
        </form>

    </div>

@endsection

