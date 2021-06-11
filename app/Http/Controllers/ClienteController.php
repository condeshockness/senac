<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes = Cliente::all();
        return view('listar-cliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cadastrar-cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cliente = new Cliente;

        $user =Auth::user()->name;
        
        $cliente->user = $user;
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->celular = $request->input('celular');
        $cliente->nome_pet = $request->input('nome_pet');
        $cliente->raca = $request->input('raca');
        $cliente->tipo_pet = $request->input('tipo_pet');
        $cliente->vacina = $request->input('vacina');
        $cliente->idade_aprox = $request->input('idade_aprox');
        $cliente->sexo = $request->input('sexo');
        $cliente->numero_filhotes = $request->input('numero_filhotes');
        $cliente->obs = $request->input('obs');

        $cliente->save();

        $request->session()->flash('message','Cliente inserido com sucesso');
        return Redirect::to('/listar-cliente');
        
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
