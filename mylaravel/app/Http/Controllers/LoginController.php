<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   function index(){
    return view('login');

   }
   function login (Request $req){
    //print_r($req->input());
    $user = User::Where('email',$req->email)->first();
    if($user != null && Hash::check($req->password , $user->password)){
        $req->session()->put('user', $user);
        return redirect('/users');
    }else {
        //$req->session()->flash('error','กรุณาตรวจสอบข้อมูล');
        $req->session()->put('error', 'กรุณาตรวจสอบข้อมูล');
return redirect('/login');
        return redirect('/login');
    }

   }
}
