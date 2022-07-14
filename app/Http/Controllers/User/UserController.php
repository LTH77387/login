<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function userIndex(){
        return view('User.index');
    }
    public function userHome(){
        $category=Category::get();
        $data=Product::where('publish_status',1)->paginate(5);
        if(count($data)==0){
            $emptyStatus=0;
        }else{
            $emptyStatus=1;
        }
        return view('User.userHome')->with(['productData'=>$data,'count'=>$emptyStatus,'category'=>$category]);
    }


    public function userProfileDataChange($id,Request $request){
        $getData=$this->getUserData($request);
        User::where('id',$id)->update($getData);

       return back()->with(['updateSuccess'=>"User Data Updated Successfully!!"]);
    }
    public function userProfileShow($id){
        // $data=$this->userUpdate($request);
        // User::where('id',$id)->update($data);
       $data= User::where('id',$id)->first();
        return view('User.userEdit')->with(['userEdit'=>$data]);
    }
    public function userDataDelete($id){
        User::where('id',$id)->delete();
        return back()->with(['deleteSuccess'=>"User Data are Deleted Successfully!"]);
    }
    public function userPasswordChangePage(){

        return view('User.userPasswordChange');
    }
    public function userRealPasswordChange($id,Request $request){
        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required',
            'newPassword' => 'required',
            'confirmPassword'=>'required',

        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $oldPassword=$request->oldPassword;
        $newPassword=$request->newPassword;
        $confirmPassword=$request->confirmPassword;
        $data=User::where('id',$id)->first();
        $hashedPassword=$data['password'];
        // dd($hashedPassword);
        if(Hash::check($oldPassword,$hashedPassword)){
            if($newPassword != $confirmPassword){
                return back()->with(['notMatch'=>"Passwords do not match! Try Again..."]);
            }else{
                if(strlen($newPassword) <= 6 || strlen($confirmPassword) <= 6){
                    return back()->with(['lengthErr'=>"Passwords Must Be Greater Than 6"]);
                }else{//change case
                    $hash=Hash::make($newPassword);
                    $data=[
                        'password'=>$hash,
                    ];
                    User::where('id',$id)->update($data);

                    return back()->with(['success'=>"Password Changed Successfully!!"]);
                }
            }
        }else{
            return back()->with(['oldPasswordErr'=>"Old Password does not match"]);
        }
    }
    public function userMoreDetails($id){
       $data=Product::where('products.id',$id)->get();
       $category=Category::first();
    //    dd($category->toArray());
        return view('User.userMoreDetails')->with(['productData'=>$data,'category'=>$category]);
    }
    public function userSend (Request $request){
        $validator = Validator::make($request->all(), [
          'name'=>'required',
          'email'=>'required',
          'message'=>'required',

        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
        ];
        Contact::create($data);
        return back()->with(['contactSuccess'=>"Informations sent successfully!"]);

    }
    public function userSearch(Request $request){
        $data=Product::where('product_name','like','%' . $request->userSearch . '%')->paginate(5);
        $category=Category::get();
        if(count($data)==0){
          $emptyStatus=0;
      }else{
          $emptyStatus=1;
      }
        return view('User.userHome')->with(['productData'=>$data,'category'=>$category,'count'=>$emptyStatus]);
    }
    public function userCategory($id){
 $data=Product::where('category_id',$id)
 ->where('publish_status',1)
 ->paginate(5);
//  dd($data->toArray());
 $category=Category::get();
 if(count($data)==0){
    $emptyStatus=0;
}else{
    $emptyStatus=1;
}
 return view('User.userHome')->with(['category'=>$category,'productData'=>$data,'count'=>$emptyStatus]);
    }
    public function userPriceSearch(Request $request){
        $min=$request->minPrice;
        $max=$request->maxPrice;
        $query=Product::select('*');
        if(!is_null($min) && is_null($max)){
            $query=$query->where('price','>=',$min);
        }else if(is_null($min) && !is_null($max)){
            $query=$query->where('price','<=',$max);
        }else if(!is_null($min) && !is_null($max)){
            $query=$query->where('price','>=',$min)
                         ->where('price','<=',$max);
        }
        $query=$query->paginate(5);
        $query->appends($request->all());
        $status=count($query) == 0 ? 0 : 1;
        $category=Category::get();
        return view('User.userHome')->with(['productData'=>$query,'category'=>$category,'count'=>$status]);
    }
    private function getUserData($request){
        return [
            'name'=>$request->name,
            'email'=>$request->email,

        ];
    }
    private function userUpdate($request){
        return [
            'name'=>$request->name,
            'email'=>$request->email,
        ];
    }
}
