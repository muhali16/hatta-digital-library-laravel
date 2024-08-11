<?php

namespace App\Repositories\BookCategory;

use LaravelEasyRepository\Implementations\Eloquent;
use App\Models\BookCategory;

class BookCategoryRepositoryImplement extends Eloquent implements BookCategoryRepository{

    /**
    * Model class to be used in this repository for the common methods inside Eloquent
    * Don't remove or change $this->model variable name
    * @property Model|mixed $model;
    */
    protected $model;

    public function __construct(BookCategory $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->latest()->filter()->paginate(12)->withQueryString();
    }
}
