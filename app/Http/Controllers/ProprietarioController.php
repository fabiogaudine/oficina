<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ProprietarioRepository;

class ProprietarioController extends Controller
{
    public function __construct (ProprietarioRepository $aux)
    {
        $this->classe = $aux;
    }

}
