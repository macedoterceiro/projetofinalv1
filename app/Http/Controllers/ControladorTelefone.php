<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use App\Telefone;

class ControladorTelefone extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $idcon)
    {
        $tels = Telefone::where('con_id', $idcon)->get();
        return view('telefone.lista', compact('tels', 'idcon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $idcon)
    {
        return view('telefone.novo', compact('idcon'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idcon)
    {
        $validator = $request->validate([
            'tel_numero' => 'required|numeric|min:11|lte:99999999999'
        ]);
        $tel = new Telefone();
        $tel->tel_numero = $request->input('tel_numero');
        $tel->con_id = $idcon;
        $tel->save();
        return redirect('/contatos/'. $idcon .'/telefones');
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
    public function edit(Request $request, $idcon, $id)
    {
        $tel = Telefone::find($id);
        if (isset($tel)){
            return view('telefone.edit');
        }
        return redirect('/contatos/'. $idcon .'/telefones');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idcon, $id)
    {
        $validator = $request->validate([
            'tel_numero' => 'required|numeric|min:11|max:11|lte:99999999999'
        ]);

        $tel = Produto::find($id);
        if (isset($tel)){
            $tel->tel_numero = $request->input('tel_numero');
            $tel->save();
        }
        return redirect('/contatos/'. $idcon .'/telefones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idcon, $id)
    {
        $tel = Telefone::find($id);
        if (isset($tel)){
            $tel->delete();
        }
        return redirect('/contatos/'. $idcon .'/telefones');
    }
}
