<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder as EloquentQueryBuilder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Pagination\AbstractPaginator as Paginator;

abstract class BaseRepository
{
    /**
     * Model class for repo.
     *
     * @var string
     */
    protected $modelClass;

    public function find($id)
    {
        //dd($id);
        return $this->modelClass->find($id);
    }


    public function paginate($qtd=15, $campo=1, $ordem='asc' )
    {
        //return $this->modelClass->orderBy($campo, $ordem)->paginate($qtd);
        return $this->modelClass->all();
    }

    public function create($data)
    {
        return $this->modelClass->create($data);
    }

    public function whereBetween($campo, $inicio, $fim){
        
        return $this->modelClass->whereBetween($campo, [$inicio, $fim]);

    }

    public function select($data)
    {
//        dd($data);
        return $this->modelClass->select($data);
    }

    public function all()
    {
        return $this->modelClass->all();
    }

}