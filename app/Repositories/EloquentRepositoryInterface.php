<?php

namespace App\Repositories;

interface EloquentRepositoryInterface
{
    public function getAll();

    public function find($id);
    public function findBy($field, $value, $columns = array('*'));
    public function findWhere(array $wheres, $columns = array('*'));
    public function findFirstWhere(array $wheres, $columns = array('*'));
    public function findWhereIn($field, array $values, $columns = array('*'));
    public function paginate($perPage = 15, $columns = array('*'));
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
}
