<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Promotion\PromotionRepository;
use Illuminate\Http\Request;

class PromotionController extends Controller
{

    public $promotionRepository = null;

    function __construct(PromotionRepository $promotionRepository)
    {
        $this->promotionRepository = $promotionRepository;
    }

    public function index(Request $request){

        $promotions = $this->promotionRepository->getAllData($request);
        return view('admin.promotion.index', compact('promotions', 'request'));
    }

    public function remove(Request $request)
    {
        $id = $request->get('id', 0);
        $result = $this->promotionRepository->delete($id);
        if ($result) {
            return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => $id]);
        }else{
            return response()->json(['status' => 0, 'message' => 'Successfully']);
        }

    }

    public function update(Request $request)
    {
        $id = $request->get('id', 0);
        if($id > 0) {
            $pro = $this->promotionRepository->findBy("code", $request->get('code', ''));
            if ($pro == null || $pro->id == $id){
                $this->promotionRepository->updateData($request);
                return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => $pro]);
            }else{
                return response()->json(['status' => 1, 'message' => 'Mã quảng cáo đã tồn tại']);
            }
        } else {
            $pro = $this->promotionRepository->findBy("code", $request->get('code', ''));
            if ($pro == null){
                $this->promotionRepository->addData($request);
                return response()->json(['status' => 0, 'message' => 'Successfully', 'data' => '']);
            }else{
                return response()->json(['status' => 1, 'message' => 'Mã quảng cáo đã tồn tại']);
            }
        }
    }

}
