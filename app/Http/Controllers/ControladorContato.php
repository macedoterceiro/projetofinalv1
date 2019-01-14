<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use App\User;

class ControladorContato extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cons = Contato::all();
        return view('contato.lista', compact('cons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contato.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'con_nome' => 'required|min:3',
        ]);

        $con = new Contato();
        $con->con_nome = $request->input('con_nome');
        $con->usu_id = auth()->user()->id;
        $con->save();
        return redirect('/contatos');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $con = Contato::find($id);
        if (isset($con)){
            return view('contato.edit', compact('con'));
        }
        return redirect('/contatos');
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
        $validator = $request->validate([
            'con_nome' => 'required|min:3',
        ]);

        $con = Contato::find($id);
        if (isset($con)){
            $con->con_nome = $request->input('con_nome');
            $con->save();
        }
        return redirect('/contatos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $con = Contato::find($id);
        if($con->telefones){
            return redirect('/contatos')->with('status', 'Não pode apagar contato com telefone');
        }
        else if (isset($con)){
            $con->delete();
        }
        return redirect('/contatos');
    }
}
