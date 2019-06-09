<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\GenreRepository;

class GenreController extends Controller
{

    public function __construct (GenreRepository $aux)
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
