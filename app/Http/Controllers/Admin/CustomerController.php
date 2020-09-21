<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerRespository;
use App\Repositories\Promotion\PromotionRepository;
use App\Repositories\PromotionCustomer\PromotionCustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public $customerRepository = null;
    public $promotionRepository = null;
    public $promotionCustomerRepository = null;

    function __construct(CustomerRespository $customerRepository, PromotionRepository $promotionRepository, PromotionCustomerRepository $promotionCustomerRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->promotionRepository = $promotionRepository;
        $this->promotionCustomerRepository = $promotionCustomerRepository;
    }

    public function index(Request $request){
        $customers = $this->customerRepository->getAllData($request);

        $totalNumber = $this->promotionCustomerRepository->getTotalNumber($request->get("promotion_id", 0));;
        $acceptNumber = $this->promotionCustomerRepository->getAcceptNumber($request->get("promotion_id", 0));;;
        $returnNumber = $this->promotionCustomerRepository->getReturnNumber($request->get("promotion_id", 0));;;

        $promotions = $this->promotionRepository->getAllDataForCustomer();
        return view('admin.customer.index', compact('customers', 'promotions', 'request', 'totalNumber', 'acceptNumber', 'returnNumber'));
    }

    public function remove(Request $request)
    {
        $id = $request->get('id', 0);
        $result = $this->customerRepository->delete($id);
        if ($result) {
            $this->promotionCustomerRepository->delelteByCustomer($id);
            return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => $id]);
        }else{
            return response()->json(['status' => 1, 'message' => 'Failure']);
        }

    }

    public function update(Request $request)
    {
        $id = $request->get('id', 0);
        if($id > 0) {
            $pro = $this->customerRepository->findBy("phone", $request->get('phone', ''));
            if ($pro == null || $pro->id == $id){
                $this->customerRepository->updateData($request);
                $this->promotionCustomerRepository->updateStatusAndDes(
                    $id,
                    $request->get('promotion_id', 0),
                    $request->get('status', 1),
                    $request->get("description", ""));
                return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => $pro]);
            }else{
                return response()->json(['status' => 1, 'message' => 'Số điện thoại đã tồn tại']);
            }
        } else {
            $pro = $this->customerRepository->findBy("phone", $request->get('phone', ''));
            if ($pro == null){
                $customer = $this->customerRepository->addData($request);
                $promotion_id = $request->get("promotion_id", 0);
                $this->promotionCustomerRepository->addData($customer->id, $promotion_id,
                    $request->get("status", 1),
                    $request->get("quantity", 1),
                    $request->get("color", ''),
                    $request->get("active", 1),
                    $request->get("description", ""));
                return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => '']);
            }else{
                /**
                 * kiem tra đã có trong promotion_customers
                 */
                $promotion_id = $request->get("promotion_id", 0);

                $hasAds = $this->promotionCustomerRepository->findFirstWhere(['customer_id'=>$pro->id, 'promotion_id'=>$promotion_id]);
                if ($hasAds == null) {
                    $this->promotionCustomerRepository->addData($pro->id, $promotion_id,
                        $request->get("status", 1),
                        $request->get("quantity", 1),
                        $request->get("color", ''),
                        $request->get("active", 1),
                        $request->get("description", ""));
                    return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => '']);
                }else{
                    return response()->json(['status' => 1, 'message' => 'Số điện thoại đã tồn tại']);
                }
            }
        }
    }

}
