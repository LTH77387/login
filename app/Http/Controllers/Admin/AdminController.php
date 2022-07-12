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
public function adminCategoryPage(){
    $data=Category::paginate(5);

    return view('Admin.adminCategoryPage')->with(['showCategory'=>$data]);
}
public function addCategory(){
    return view('Admin.addCategory');
}
public function categoryAdd(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required',


    ]);

    if ($validator->fails()) {
        return back()
                    ->withErrors($validator)
                    ->withInput();
    }
    $data=$this->getCategoryData($request);
    Category::create($data);




    return redirect()->route('addCategory')->with(['addSuccess'=>"Categories Are Added Successfully!!!"]);
}
public function adminProductList(){
    $data=Product::paginate(5);
    return view('Admin.adminProductList')->with(['productList'=>$data]);
}
public function addProductPage(){
    $data=Category::get();

   return view('Admin.products.addProductPage')->with(['create'=>$data]);
}
public function adminCategoryAdd(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'image'=>'required',
        'price'=>'required',
        'publish'=>'required',
        'category'=>'required',
        'discount'=>'required',
        'waitingTime'=>'required',
        'description'=>'required',

    ]);

    if ($validator->fails()) {
        return back()
                    ->withErrors($validator)
                    ->withInput();
    }
    $file=$request->file('image');
    $fileName=uniqid() . '_' . $file->getClientOriginalName();

    $file->move(public_path() . '/uploads/' , $fileName);

   $data=$this->requestPizzaData($request,$fileName);
 Product::create($data);
    return back()->with(['createPizza'=>"Pizza created successfully!"]);
}
public function productListAdmin($id){
    $data=Product::where('product_id',$id)
    ->first();
    return view('Admin.products.productListAdmin')->with(['productList'=>$data]);
}
public function categoryDelete($id){
Category::where('category_id',$id)->delete();
return back()->with(['categoryDelete'=>"Categories Data are deleted successfully!"]);
}
public function categoryUpdate($id){
    $data=Category::where('category_id',$id)->first();
    return  view('Admin.category.categoryUpdate')->with(['categoryData'=>$data]);

}
public function categoryEdit(Request $request,$id){
    $data=[
        'category_name'=>$request->name,
    ];
    Category::where('category_id',$id)->update($data);
    return back()->with(['categoryEdit'=>"Category Data is updated successfully!"]);
}
public function productEdit($id){
    $data=Category::get();
    $edit=Product::select('products.*','categories.category_id','categories.category_name')
    ->leftJoin('categories','products.category_id','categories.category_id')
    ->where('product_id',$id)
    ->first();

    return view('Admin.products.editProducts')->with(['create'=>$data,'edit'=>$edit]);
}
public function editProducts($id,Request $request){
    $validator = Validator::make($request->all(), [

        'name'=>'required',
        // 'image'=>'required',
        'description'=>'required',
        'price'=>'required',
        'publish'=>'required',
        'category'=>'required',
        'discount'=>'required',
        'waitingTime'=>'required',
    ]);

    if ($validator->fails()) {
        return    back()
                    ->withErrors($validator)
                    ->withInput();

    }
 $updateData=$this->requestUpdatePizzaData($request);
if(isset($updateData['image'])){
    $data=Product::select('image')->where('product_id',$id)->first();

    $fileName=$data['image'];
    // dd($fileName);
    if(File::exists(public_path() . '/uploads/' . $fileName)){
        File::delete(public_path() . '/uploads/' . $fileName);

        //get new img data
        $file=$request->file('image');

        $fileName=uniqid() . '_' . $file->getClientOriginalName();

        $file->move(public_path() . '/uploads/' , $fileName);

        $updateData['image']=$fileName;

        Product::where('product_id',$id)->update($updateData);
return back()->with(['updatePizzaData'=>"Pizza data updated successfully!"]);

}
}
else{

    Product::where('product_id',$id)->update($updateData);

    return back()->with(['updatePizzaData'=>"Pizza data updated successfully!"]);
}
}
public function productsDelete($id){
    Product::where('product_id',$id)->delete();
    return back()->with(['deleteSuccess'=>"Products Data Are Deleted Successfully!!"]);
}
private function requestPizzaData($request,$fileName){
    return [
        'product_name'=>$request->name,
        'image'=>$fileName,
        'price'=>$request->price,
        'publish_status'=>$request->publish,
        'category_id'=>$request->category,
        'discount_price'=>$request->discount,
        'waiting_time'=>$request->waitingTime,
        'description'=>$request->description,
    ];
    }
    private function requestUpdatePizzaData($request){
        $arr=[
            'product_name'=>$request->name,
            'price'=>$request->price,
            'publish_status'=>$request->publish,
            'category_id'=>$request->category,
            'discount_price'=>$request->discount,
            'waiting_time'=>$request->waitingTime,
            'description'=>$request->description,
        ];

         if(isset($request->image)){
           $arr['image']=$request->image;
         }
         return $arr;
     }
     private function getCategoryData($request){
         return [
            'category_name'=>$request->name,
         ];
     }
}


