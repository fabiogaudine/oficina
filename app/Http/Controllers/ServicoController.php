<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ServicoRepository;


class ServicoController extends Controller
{

    public function __construct (ServicoRepository $aux)
    {
        $this->classe = $aux;
    }

}
