<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adocao;

class AdocaoController extends Controller
{
    /**
     * Cria um novo registro de adoção
     *
     * @param Request $request
     * @return Adocao
     */
    public function store(Request $request)
    {
        $request->validate([
            "email" => ['required', 'email'],
            "valor" => ['required', 'numeric', 'between:10,100'],
            "pet_id" => ['required', 'int', 'exists:pets,id']
        ]);

        $dadosDaAdicao = $request->all();
        
        return Adocao::create($dadosDaAdicao);
    }
}
