<?php
namespace App\Repositories\Customer;

use App\Repositories\EloquentRepository;
use App\Models\Customer;

class CustomerRespository extends  EloquentRepository implements CustomerRespositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Customer::class;
    }

    public function addData($attributes)
    {
        return $this->create([
            'name' => $attributes->get('name'),
            'phone' => $attributes->get('phone'),
            'address' => str_replace( array("\r\n","\r","\n",'  '), ', ' ,$attributes->get('address') ? $attributes->get('address') : ''),
//            'description' => $attributes->get('description'),
        ]);
    }

    public function updateData($attributes)
    {
        $id = $attributes->get('id');
        return $this->update($id, [
                'name' => $attributes->get('name'),
                'phone' => $attributes->get('phone'),
                'address' => str_replace( array("\r\n","\r","\n",'  '), ', ' ,$attributes->get('address') ? $attributes->get('address') : ''),
//                'description' => $attributes->get('description'),
            ]
        );
    }

    public function updateDataNotPhone($attributes)
    {
        $phone = $attributes->get('phone');
        $cus = $this->findBy("phone", $phone);
        $id = $cus->id;
        return $this->update($id, [
                'name' => $attributes->get('name'),
                'address' => str_replace( array("\r\n","\r","\n",'  '), ', ' ,$attributes->get('address') ? $attributes->get('address') : ''),
//                'description' => $attributes->get('description'),
            ]
        );
    }

    public function updateDataNotPhoneNotDes($attributes)
    {
        $phone = $attributes->get('phone');
        $cus = $this->findBy("phone", $phone);
        $id = $cus->id;
        return $this->update($id, [
                'name' => $attributes->get('name'),
                'address' => str_replace( array("\r\n","\r","\n",'  '), ', ' ,$attributes->get('address') ? $attributes->get('address') : ''),
            ]
        );
    }

    public function getAllData($attributes){
        $promotionId = $attributes->get("promotion_id", 0);
        if ($promotionId == 0) {
            return $this->_model->orderBy('created_at', 'DESC')->paginate(15)->appends($attributes->query());
        }else{
            return $this->_model
                ->select('name', 'phone', 'address', 'customers.id', 'ps.description' , 'customers.created_at', 'customers.updated_at', 'ps.status', 'ps.color', 'ps.quantity')
                ->join('promotion_customers as ps', 'customers.id', '=', 'ps.customer_id')
                ->where('ps.promotion_id', $promotionId)
                ->orderBy('customers.created_at', 'DESC')->paginate(15)->appends($attributes->query());
        }

    }

}
