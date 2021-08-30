<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public  function registrosCompanias()
    {
        $companies=company::all();
        return view( 'Companies.registros-companias', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }


    public function store(Request $request)
    {
        $company = Company::create([
            'name'=>$request->input('name'),
            'nit'=>$request->input('nit')
        ]);
        return redirect()->route('companies.index');
    }


    public function show($id)
    {
        $company = Company::find($id);
        return view('companies.show', compact('company'));

    }


    public function edit($id)
    {
        $company = Company::find($id);
        return view('companies.edit', compact('company'));
    }


    public function update(Request $request, $id)
    {
        $company = Company::find($id)->update([
           'name'=>$request->input('name'),
            'nit'=>$request->input('nit'),
        ]);
        return redirect()->route('companies.index');
    }


    public function destroy($id)
    {
        $company = Company::find($id)->delete();
        return redirect()->route('companies.index');

    }
}

