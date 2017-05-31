<?php
namespace Afrittella\LaravelRepository\Repositories\Criteria;

use Afrittella\LaravelRepository\Repositories\Criteria\Criteria;
use Afrittella\LaravelRepository\Contracts\RepositoryInterface as Repository;
use Illuminate\Support\Facades\Auth;

class ByUser extends Criteria {

    protected $user_id;

    public function __construct($user_id = null)
    {
        if (!is_null($user_id)) {
            $this->user_id = $user_id;
        } else {
            $this->user_id = Auth::user()->id;
        }
    }

    public function apply($model, Repository $repository)
    {
        $query = $model->where('user_id', '=', $this->user_id);
        return $query;
    }
}