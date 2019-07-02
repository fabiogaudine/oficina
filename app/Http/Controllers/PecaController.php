<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\PecaRepository;


class PecaController extends Controller
{

    public function __construct (PecaRepository $aux)
    {
        $this->classe = $aux;
    }

    public function store(Request $request)
    {
        $peca = new PecaRepository();
        $peca->descricao    = $request->descricao;
        $peca->marca        = $request->marca;
        $peca->quantidade   = $request->quantidade;
        $peca->valor        = $request->valor;
        $post->observacao   = $request->observacao;

        $peca->save();

        return response($peca, 200);
    }

    public function destroy($id)
    {
        $peca = PecaRepository::fint($id);
        if( isset($peca)){
            $peca->delete();
            return 204;
        }
        return response('Peça não encontrada', 404);
    }

}
