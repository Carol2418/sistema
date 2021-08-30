@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-6 offset-md-3"></div>
        <div class="table-responsive"></div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>NOMBRE</td>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <td>DESCRIPCION</td>
                <td>{{$product->description}}</td>
            </tr>
            <tr>
                <td>PRECIO</td>
                <td>{{$product->price}}</td>
            </tr>
            <tr>
                <td>IMAGEN</td>
                <td>{{$product->image}}</td>
            </tr>
            <tr>
                <td>COMPAÑIA</td>
                <td>{{$product->companies_id}}</td>
            </tr>
            </thead>
        </table>
        <a href="{{route('products.index')}}" class="btn btn-dark btn-sm">Volver al inicio</a>
        <a href="{{route('products.edit', $product->id)}}" class="btn btn-dark  btn-sm">Editar Producto</a>
    </div>



@endsection

