<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\usuario;



class ProdutosController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {

        //dd($request->all());

        usuario::create([

            'nome' => $request->nome,
            'senha' => $request->senha,
            'email' => $request->email,
            'sexo' => $request->sexo,
            'nascimento' => $request->nascimento,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'grau' => $request->grau,
            'mensagem' => $request->mensagem,
            'cor' => $request->cor,
            'quantidade' => $request->quantidade,
            'precoTotal' => $request->precoTotal,
        ]);

        return "Enviado com sucesso!";

    }
}
