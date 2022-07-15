<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function userOrder($id,Request $request){
        $validator = Validator::make($request->all(), [
            'colors'=>'required',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $userId=auth()->user()->id;

$data=$this->reqUserData($request,$userId,$id);
Order::create($data);
return view('User.userMoreDetails')->with(['orderSuccess'=>"Your Order is submitted succesfully!.Please Wait 3 weeks"]);



}
private function reqUserData($request,$userId,$id){
    return [
        'customer_id'=>$userId,
        'colors'=>$request->colors,
        'product_id'=>$id,
    ];
}
}
