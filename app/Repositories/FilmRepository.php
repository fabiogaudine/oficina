<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Film;
use App\Repositories\BaseRepository;
use Carbon\Carbon;


class FilmRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct(Film $classeBD)
    {
        $this->modelClass = $classeBD;
    }

}