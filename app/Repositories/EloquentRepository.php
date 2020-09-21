<?php

namespace App\Repositories;

abstract class EloquentRepository implements EloquentRepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    public $_model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->_model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->_model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->_model->find($id);

        return $result;
    }

    /**
     * @param $field
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($field, $value, $columns = array('*')) {
        return $this->_model->where($field, '=', $value)->first($columns);
    }

    /**
     * @param array $wheres
     * @param array $columns
     * @return mixed
     */
    public function findWhere(array $wheres, $columns = array('*')) {
        foreach ($wheres as $field => $value) {
            if (is_array($value)) {
                list($field, $condition, $val) = $value;
                $this->_model = $this->_model->where($field, $condition, $val);
            } else {
                $this->_model = $this->_model->where($field, '=', $value);
            }
        }
        return $this->_model->get($columns);
    }

    /**
     * @param array $wheres
     * @param array $columns
     * @return mixed
     */
    public function findFirstWhere(array $wheres, $columns = array('*')) {
        foreach ($wheres as $field => $value) {
            if (is_array($value)) {
                list($field, $condition, $val) = $value;
                $this->_model = $this->_model->where($field, $condition, $val);
            } else {
                $this->_model = $this->_model->where($field, '=', $value);
            }
        }
        return $this->_model->first($columns);
    }

    /**
     * @param array $wheres
     * @param array $columns
     * @return mixed
     */
    public function findWhereIn($field, array $values, $columns = array('*')) {
        $this->_model = $this->_model->whereIn($field, $values);
        return $this->_model->get($columns);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->_model->paginate($perPage, $columns);
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->_model->create($attributes);
    }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }

    /**
     * Delete
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }

}
