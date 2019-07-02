<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Mecanico;
use App\Repositories\BaseRepository;
use Carbon\Carbon;


class MecanicoRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct(Mecanico $classeBD)
    {
        $this->modelClass = $classeBD;
    }

}