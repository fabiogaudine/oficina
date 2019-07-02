<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\VeiculoRepository;

class VeiculoController extends Controller
{

    public function __construct (VeiculoRepository $aux)
    {
        $this->classe = $aux;
    } 
}
