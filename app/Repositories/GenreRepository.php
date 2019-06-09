<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Genre;
use App\Repositories\BaseRepository;
use Carbon\Carbon;


class GenreRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct(Genre $classeBD)
    {
        $this->modelClass = $classeBD;
    }

}