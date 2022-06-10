<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

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
}
