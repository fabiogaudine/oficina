<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Peca;
use App\Repositories\BaseRepository;
use Carbon\Carbon;


class PecaRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct(Peca $classeBD)
    {
        $this->modelClass = $classeBD;
    }

}