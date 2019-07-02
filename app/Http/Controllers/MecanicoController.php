<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\MecanicoRepository;


class MecanicoController extends Controller
{

    public function __construct (MecanicoRepository $aux)
    {
        $this->classe = $aux;
    }
}
