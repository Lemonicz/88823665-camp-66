<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MyController extends Controller{
    private function myprivate(){
        return 1;
    }
    function myfunction(Request $req,$var1=""){
        $data['myinput']= $req->input('myinput','');
        $data['myvalue']= "";
        $data['multiplicationTable']=[];

    if (!empty($var1) && preg_match('/^(\d+)\*(\d+)$/',$var1,$matchs)){
        $num1 = (int)$matchs[1];
        $num2 = (int)$matchs[2];
        $data['myvalue'] = $num1 * $num2 ;
        for($i = 1 ; $i <= 12 ; $i++){
            $data['multiplicationTable'][] = " $num1 x $i = " . ($num1 * $i);
        }
    }elseif (!empty($data['myinput']) && preg_match('/^(\d+)\*(\d+)$/',$data['myinput'], $matchs)){
        $num1 = (int)$matchs[1];
        $num2 = (int)$matchs[2];
        $data['myvalue'] = $num1 * $num2;
        for($i = 1 ;$i <= 12 ; $i++){
            $data['multiplicationTable'][] = "$num1 x $i = ". ($num1*$i);
        }
    }
    return view('myview',$data);
}
}