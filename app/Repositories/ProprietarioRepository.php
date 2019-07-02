<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Proprietario;
use App\Repositories\BaseRepository;
use Carbon\Carbon;


class ProprietarioRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct(Proprietario $classeBD)
    {
        $this->modelClass = $classeBD;
    }

}