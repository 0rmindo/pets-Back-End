<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Http\Requests\PetRequest;

class PetController extends Controller
{   
    /**
     * Retorna a lista pets cadastrados
     *
     * @return Collection
     */
    public function index()
    {
        return Pet::get();
    }

    /**
     * Cria um pet no banco de dados
     *
     * @param PetRequest $request
     * @return Pet
     */
    public function store(PetRequest $request)
    {

        $dadosDoPet = $request->all();

        return Pet::create($dadosDoPet);
    }

}
