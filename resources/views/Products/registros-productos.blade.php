@extends('layouts.app')

@section('content')
  <div class="container">
      <a href="{{route('products.create')}}" class="btn btn-secondary  btn-sm mb-3 mt-3">Crear Nuevo Producto</a>
      <div class="table-responsive"></div>
      <table class="table table-striped">
          <thead class="table-dark">
          <tr>
              <th>ID</th>
              <th>NOMBRE</th>
              <th>PRECIO</th>
              <th>IMAGEN</th>
              <th>COMPAÑIA</th>
              <th>ACCIONES</th>
          </tr>
          </thead>
          <tbody>
          @foreach($products as $product)
          <tr>
              <td>{{$product->id}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->price}}</td>
              <td>{{$product->image}}</td>
              <td>{{$product->companies_id}}</td>
              <td>
                  <form action="{{route('products.destroy',$product->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <a href="{{route('products.show',$product->id)}}" class="btn btn-secondary btn-sm">Detalles</a>
                      <a href="{{route('products.edit', $product->id)}}" class="btn btn-secondary btn-sm">Editar</a>
                      <button type="submit" class="btn btn-secondary btn-sm">Eliminar</button>
                  </form>
              </td>
          </tr>
          @endforeach
          </tbody>
      </table>
  </div>



@endsection


