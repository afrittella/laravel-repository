<?php
namespace Afrittella\LaravelRepository\Contracts;

use Afrittella\LaravelRepository\Repositories\Criteria\Criteria;

interface CriteriaInterface
{
    public function skipCriteria($status = true);

    public function getCriteria();

    public function getByCriteria(Criteria $criteria);

    public function pushCriteria(Criteria $criteria);

    public function applyCriteria();

    public function resetCriteria();
}