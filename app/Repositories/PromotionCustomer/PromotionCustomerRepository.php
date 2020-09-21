<?php
/**
 * Created by PhpStorm.
 * User: hoangnguyen
 * Date: 2020-01-29
 * Time: 12:43
 */

namespace App\Repositories\PromotionCustomer;


use App\Repositories\EloquentRepository;

class PromotionCustomerRepository extends EloquentRepository implements PromotionCustomerRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Models\PromotionCustomer::class;
    }

    public function getAllData(){
        return $this->_model->orderBy('created_at', 'DESC')->paginate(15);
    }


    public function addData($customer_id, $promotion_id, $status, $quantity, $color, $active, $description)
    {
        return $this->create([
            'promotion_id' => $promotion_id,
            'customer_id' => $customer_id,
            'quantity' => $quantity ? $quantity : 1,
            'color' => $color ? $color : '',
            'is_active' => $active ? $active : 1,
            'status' => $status ? $status : 1,
            'description' => $description ? $description : '',
        ]);
    }

    public function updateStatus($customerId, $promotionId,  $status)
    {
        $id =  $this->_model->where('customer_id', '=', $customerId)->where('promotion_id', '=', $promotionId)->first()->id;
        return $this->update($id, [
                'status' => $status ? $status : 1,
            ]
        );
    }

    public function getTotalNumber($promotionId){
        return $this->_model->select()->where('promotion_id', '=', $promotionId)->count();
    }

    public function getAcceptNumber($promotionId){
        return $this->_model->select()->where('promotion_id', '=', $promotionId)->where('status', '>', 4)->count();
    }

    public function getReturnNumber($promotionId){
        return $this->_model->select()->where('promotion_id', '=', $promotionId)->where('status', '=', 8)->count();
    }

    public function updateStatusAndDes($customerId, $promotionId,  $status, $description)
    {
        $id =  $this->_model->where('customer_id', '=', $customerId)->where('promotion_id', '=', $promotionId)->first()->id;
        return $this->update($id, [
                'status' => $status ? $status : 1,
                'description' => $description ? $description : '',
            ]
        );
    }

    public function delelteByCustomer($customerId){
        return $this->_model->where('customer_id', '=', $customerId)->delete();
    }


    public function updateData($id, $customer_id, $promotion_id, $status, $quantity, $color, $active, $description)
    {
        return $this->update($id, [
                'promotion_id' => $promotion_id,
                'customer_id' => $customer_id,
                'quantity' => $quantity ? $quantity : 1,
                'color' => $color ? $color : '',
                'is_active' => $active ? $active : 1,
                'status' => $status ? $status : 1,
                'description' => $description ? $description : '',
            ]
        );
    }

    public function updateData2NotId($customerId, $promotionId, $status, $quantity, $color, $active, $description)
    {
        $id =  $this->_model->where('customer_id', '=', $customerId)->where('promotion_id', '=', $promotionId)->first()->id;
        return $this->update($id, [
                'promotion_id' => $promotionId,
                'customer_id' => $customerId,
                'quantity' => $quantity ? $quantity : 1,
                'color' => $color ? $color : '',
                'is_active' => $active ? $active : 1,
                'status' => $status ? $status : 1,
                'description' => $description ? $description : '',
            ]
        );
    }

}
