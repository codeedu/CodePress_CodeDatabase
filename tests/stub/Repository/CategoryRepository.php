<?php

namespace CodePress\CodeDatabase\Repository;

use CodePress\CodeDatabase\Models\Category;
use CodePress\CodeDatabase\AbstractRepository;


class CategoryRepository extends AbstractRepository
{

    public function findBy($field, $value, $columns = array('*'))
    {
        // TODO: Implement findBy() method.
    }

    public function model()
    {
        return Category::class;
    }
}