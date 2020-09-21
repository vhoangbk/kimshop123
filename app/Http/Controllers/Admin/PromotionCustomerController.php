<?php
/**
 * Created by PhpStorm.
 * User: hoangnguyen
 * Date: 2020-01-29
 * Time: 12:45
 */

namespace App\Http\Controllers\Admin;


use App\Repositories\PromotionCustomer\PromotionCustomerRepository;

class PromotionCustomerController
{

    public $promotionCustomerRepository = null;

    function __construct(PromotionCustomerRepository $promotionCustomerRepository)
    {
        $this->promotionCustomerRepository = $promotionCustomerRepository;
    }

    public function index(Request $request){
        $promotionCustomers = $this->promotionCustomerRepository->getAll();
        return view('admin.customer.index', compact('promotionCustomers', 'request'));
    }

}