<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Repositories\BaseRepository;
use Carbon\Carbon;


class CommentRepository extends BaseRepository
{
    protected $modelClass;

    public function __construct(Comment $classeBD)
    {
        $this->modelClass = $classeBD;
    }

}