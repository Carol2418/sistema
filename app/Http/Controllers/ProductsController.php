<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function registrosProductos()
    {
        $products = product::all();
        return view( 'Products.registros-productos', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $Product=Product::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'image'=>$request->input('image'),
            'companies_id'=>$request->input('companies_id')

        ]);
        return redirect()->route('products.index');
    }


    public function show($id)
    {
        $product=Product::find($id);
        return view('products.show', compact('product'));
    }


    public function edit($id)
    {
        $product=Product::find($id);
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product=Product::find($id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'image'=>$request->input('image'),
            'companies_id'=>$request->input('companies_id')

        ]);
        return redirect()->route('products.index');

    }


    public function destroy($id)
    {
        $product=Product::find($id)->delete();
        return redirect()->route('products.destroy');
    }
}

