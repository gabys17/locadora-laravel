<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marca = Marca::all();
        $countMarca = count($marca);

        return view('marca.index', array(
            'marca' => $marca,
            'countMarca' => $countMarca
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new marca();
        $marca->nome_marca = $request->input('nome_marca');
        $marca->cnpj = $request->input('cnpj');
        $marca->rua = $request->input('rua');
        $marca->bairro = $request->input('bairro');
        $marca->numero = $request->input('numero');
        $marca->telefone = $request->input('telefone');
        $marca->email = $request->input('email');
        $marca->save();

        return redirect('marca');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca = Marca::find($id);
        if(isset($marca)){
            return view('marca.edit', compact('marca'));
        }
        return redirect('marca');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marca = Marca::find($id);
        if(isset($marca)){
            $marca->nome_marca = $request->input('nome_marca');
            $marca->cnpj = $request->input('cnpj');
            $marca->rua = $request->input('rua');
            $marca->bairro = $request->input('bairro');
            $marca->numero = $request->input('numero');
            $marca->telefone = $request->input('telefone');
            $marca->email = $request->input('email');
            $marca->save();

            return redirect()->route('marca.index')->with('success', 'Marca adicionada com sucesso');
        }
        else {
            return redirect()->route('marca.index')->with('error', 'Ops, a marca não foi criada');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = Marca::find($id);
        if(isset($marca)){
            $marca->delete();
        }
        return redirect('marca');
    }
}
