<?php
namespace Afrittella\LaravelRepository\Repositories\Criteria;

use Afrittella\LaravelRepository\Contracts\RepositoryInterface;

abstract class Criteria
{
    public abstract function apply($model, RepositoryInterface $repository);
}