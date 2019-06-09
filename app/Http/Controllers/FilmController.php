<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\FilmRepository;


class FilmController extends Controller
{

    public function __construct (FilmRepository $aux)
    {
        $this->classe = $aux;
    }

    public function index()
    {
        return $this->classe->paginate();
    }

    public function store(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
