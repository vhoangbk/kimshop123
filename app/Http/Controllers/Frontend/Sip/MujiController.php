<?php

namespace App\Http\Controllers\Frontend\Sip;

use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerRespository;
use App\Repositories\Promotion\PromotionRepository;
use App\Repositories\PromotionCustomer\PromotionCustomerRepository;
use Illuminate\Http\Request;

class MujiController extends Controller
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
        return view('frontend.sip.index');
    }

    public function index2(Request $request){
        return view('frontend.sip.index2');
    }

    public function thanks(Request $request){
        return view('frontend.sip.thanks');
    }

    public function addCustomer(Request $request)
    {
        $phone = $request->get('phone', "");
        $cus = $this->customerRepository->findBy("phone", $phone);
        if ($cus == null) {
            $customer = $this->customerRepository->addData($request);
            $pro = $this->promotionRepository->findBy("code", "muji-japan");
            $this->promotionCustomerRepository->addData($customer->id, $pro->id, 1, $request->get('quantity', 1), $request->get('color', ''),
                1, $request->get('description', ''));
            return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => '']);
        }else{
            $pro = $this->promotionRepository->findBy("code", "muji-japan");
            $hasAds = $this->promotionCustomerRepository->findFirstWhere(['customer_id'=>$cus->id, 'promotion_id'=>$pro->id]);
            if ($hasAds == null) {
                $this->promotionCustomerRepository->addData($cus->id, $pro->id, 1, $request->get('quantity', 1), $request->get('color', ''),
                    1, $request->get('description', ''));
                return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => '']);
            }else{
                $this->customerRepository->updateDataNotPhoneNotDes($request);
                $this->promotionCustomerRepository->updateData2NotId($cus->id, $pro->id,1, $request->get('quantity', 1),
                    $request->get('color', ""), 1, $request->get('description', ''));
                return response()->json(['status' => 1, 'message' => 'Số điện thoại đã tồn tại']);
            }
        }
    }
}
