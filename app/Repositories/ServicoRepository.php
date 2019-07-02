<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Servico;
use App\Repositories\BaseRepository;
use Carbon\Carbon;


class ServicoRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct(Servico $classeBD)
    {
        $this->modelClass = $classeBD;
    }

}