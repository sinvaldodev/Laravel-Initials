<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    //
    public function index(){
        $nomeController = 'fornecedor 1';
        $produtoFornecido = 'produto 1';
        $dataInicioFornecimento = '18-02-2022';
        $quantidadeFornecida = '10';

        return view('fornecedorView', [
            'nomeController' => $nomeController,
            'produtoFornecido' => $produtoFornecido,
            'dataInicioFornecimento' => $dataInicioFornecimento,
            'quantidadeFornecida' => $quantidadeFornecida]);
    }

    // public function show($id){
    //     return "Apresentando os fornecedores de id: {$id}";
    // }
}
