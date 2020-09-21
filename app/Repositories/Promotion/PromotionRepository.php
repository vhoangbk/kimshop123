<?php

namespace App\Repositories\Promotion;

use App\Helpers\Utils;
use App\Repositories\EloquentRepository;

class PromotionRepository extends EloquentRepository implements PromotionRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\Promotion::class;
    }

    public function addData($attributes)
    {
        return $this->create([
            'name' => $attributes->get('name'),
            'code' => $attributes->get('code'),
            'status' => $attributes->get('status', 1),
        ]);
    }

    public function updateData($attributes)
    {
        $id = $attributes->get('id');
        return $this->update($id, [
                'name' => $attributes->get('name'),
                'code' => $attributes->get('code'),
                'status' => $attributes->get('status', 1),
            ]
        );
    }

    public function getAllData(){
        return $this->_model->orderBy('created_at', 'DESC')->paginate(15);
    }

    public function getAllDataForCustomer(){
        return $this->_model->orderBy('created_at', 'DESC')->get();
    }



}
