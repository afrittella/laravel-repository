<?php
namespace Afrittella\LaravelRepository\Repositories\Criteria;

use Afrittella\LaravelRepository\Contracts\BaseRepository;

abstract class Criteria
{
    public abstract function apply($model, BaseRepository $repository);
}