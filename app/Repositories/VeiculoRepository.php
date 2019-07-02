<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Veiculo;
use App\Repositories\BaseRepository;
use Carbon\Carbon;


class VeiculoRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct(Veiculo $classeBD)
    {
        $this->modelClass = $classeBD;
    }

}