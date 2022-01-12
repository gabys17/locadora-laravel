<?php

namespace App\Http\Controllers;

use App\Models\Veiculos;
use App\Models\Cor;
use App\Models\Marca;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculos::all();
        $countVeiculos = count($veiculos);
        return view('veiculos.index', array(
            'veiculos' => $veiculos,
            'countVeiculos' => $countVeiculos
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marca = Marca::all();
        $cor = Cor::all();
        return view('veiculos.create', compact('cor', 'marca'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculos = new veiculos();
        $veiculos->id_marca = $request->input('id_marca');
        $veiculos->chassi = $request->input('chassi');
        $veiculos->placa = $request->input('placa');
        $veiculos->numero_portas = $request->input('numero_portas');
        $veiculos->id_cor = $request->input('id_cor');
        $veiculos->save();

        return redirect('veiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculos  $veiculos
     * @return \Illuminate\Http\Response
     */
    public function show(Veiculos $veiculos)
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
        $marca = Marca::all();
        $cor = Cor::all();

        $veiculos = veiculos::find($id);
        if(isset($veiculos)){
            return view('veiculos.edit', compact('veiculos', 'cor', 'marca'));
        }
        return redirect('veiculos');
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
        $veiculos = veiculos::find($id);
        if(isset($veiculos)){
            $veiculos->id_marca = $request->input('id_marca');
            $veiculos->chassi = $request->input('chassi');
            $veiculos->placa = $request->input('placa');
            $veiculos->numero_portas = $request->input('numero_portas');
            $veiculos->id_cor = $request->input('id_cor');
            $veiculos->save();

            return redirect()->route('veiculos.index')->with('success', 'Veiculo adicionado com sucesso');
        }
        else {
            return redirect()->route('veiculos.index')->with('error', 'Ops, o veículo não foi criado');
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
        $veiculos = veiculos::find($id);
        if(isset($veiculos)){
            $veiculos->delete();
        }
        return redirect('veiculos');
    }
}
