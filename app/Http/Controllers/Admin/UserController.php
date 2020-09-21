<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Provider\ProviderRepository;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request){
        if ($request->isMethod('get')) {
            return view('admin.login.index');
        } else if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required',
            ]);
            $error = $validator->errors()->messages();
            if ($error) {
                return view('admin.login.index', compact('error'));
            } else {
                $params = [
                    'username' => $request->username,
                    'password' => $request->password,
                    'is_active' => 1
                ];
                if (Auth::attempt($params)) {
                    return redirect()->route('admin_promotion');
                }else {
                    $error_message = 'Username or password not match!';
                    return view('admin.login.index', compact('error_message'));
                }
            }

        }
    }

}
