<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CodeService;
use App\Http\Controllers\Controller;


class SmsCodeController extends Controller
{
    public function getCode(CodeService $cs,Request $request){
        $phone = $request->get('phone');
        $code = mt_rand(0,9999);
        $result = $cs->getCode($phone,$code);
        if ($result['result'] == 0){
            return $result;
        }else{
            return $result;
        }
    }
}
