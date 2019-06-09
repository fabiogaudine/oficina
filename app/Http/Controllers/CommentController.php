<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\CommentRepository;
    
class CommentController extends Controller
{

    public function __construct (CommentRepository $aux)
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
