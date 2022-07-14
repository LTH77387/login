<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
  //direct admin list page
  public function adminHome(){

      return view('Admin.adminHome');
  }
  public function adminProfile(){
      $data=User::where('role','admin')
      ->paginate(5);
      return view('Admin.adminProfile')->with(['adminList'=>$data]);
  }
  public function userProfileList(){
    $data=User::where('role','user')->paginate(5);
    return view('User.userProfile')->with(['userList'=>$data]);
}
public function userProfileEdit($id){
    $data=User::where('id',$id)->first();

    return view('User.userEdit')->with(['userEdit'=>$data]);


}
public function adminProfileEdit($id){
  $data=User::where('id',$id)->first();
  return view('Admin.adminProfileEdit')->with(['adminProfileEdit'=>$data]);
}
public function adminProfileUpdate($id,Request $request){
   $updateData=[
       'name'=>$request->name,
       'email'=>$request->email,
       'phone'=>$request->phone,
       'address'=>$request->address,
       'role'=>$request->role,
   ];
User::where('id',$id)->update($updateData);
return back()->with(['updateSuccess'=>"User Data Are Updated Successfully!!"]);
}











}


