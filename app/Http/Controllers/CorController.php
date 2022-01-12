<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use Illuminate\Http\Request;

class CorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cor = Cor::all();
        $countCor = count($cor);

        return view('cor.index', array(
            'cor' => $cor,
            'countCor' => $countCor
        ));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cor = new Cor();
        $cor->nome_cor = $request->input('nome_cor');
        $cor->save();

        return redirect('cor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cor  $cor
     * @return \Illuminate\Http\Response
     */
    public function show(Cor $cor)
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
        $cor = Cor::find($id);
        if(isset($cor)){
            return view('cor.edit', compact('cor'));
        }
        return redirect('cor');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cor = Cor::find($id);
        if(isset($cor)){
            $cor->nome_cor = $request->input('nome_cor');
            $cor->save();

            return redirect()->route('cor.index')->with('success', 'Cor adicionada com sucesso');
        }
        else {
            return redirect()->route('cor.index')->with('error', 'Ops, a cor não foi criada');
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
        $cor = Cor::find($id);
        if(isset($cor)){
            $cor->delete();
        }
        return redirect('cor');
    }
}
