<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
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
            'ram'=>'required',
            'battery'=>'required',
            'storage'=>'required',
            'frontCamera'=>'required',
            'backCamera'=>'required',

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
        $data=Product::where('id',$id)
        ->first();
        $category=Category::select('categories.id as category_id')->first();
        return view('Admin.products.productListAdmin')->with(['productList'=>$data,'category'=>$category]);
    }
    public function productEdit($id){
        $data=Category::get();
        $edit=Product::select('products.*','products.id as product_id','categories.id as category_id','categories.category_name')
        ->leftJoin('categories','products.id','categories.id')
        ->where('products.id',$id)
        ->first();


        return view('Admin.products.editProducts')->with(['create'=>$data,'edit'=>$edit]);
    }
    public function editProduct($id,Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'image'=>'required',
            'price'=>'required',
            'publish'=>'required',
            'category'=>'required',
            'discount'=>'required',
            'waitingTime'=>'required',
            'ram'=>'required',
            'battery'=>'required',
            'storage'=>'required',
            'frontCamera'=>'required',
            'backCamera'=>'required',

        ]);

        if ($validator->fails()) {
            return    back()
                        ->withErrors($validator)
                        ->withInput();

        }
$updateData=$this->reqData($request);

    if(isset($updateData['image'])){
        $data=Product::select('image')->where('products.id',$id)->first();

        $fileName=$data['image'];
        // dd($fileName);
        if(File::exists(public_path() . '/uploads/' . $fileName)){
            File::delete(public_path() . '/uploads/' . $fileName);

            //get new img data
            $file=$request->file('image');

            $fileName=uniqid() . '_' . $file->getClientOriginalName();

            $file->move(public_path() . '/uploads/' , $fileName);

            $arr['image']=$fileName;

            Product::where('products.id',$id)->update($updateData);
    return back()->with(['updatePizzaData'=>"Pizza data updated successfully!"]);

    }
    }
    else{

        Product::where('products.id',$id)->update($updateData);

        return back()->with(['updatePizzaData'=>"Pizza data updated successfully!"]);
    }
    }
    public function productsDelete($id){
        Product::where('id',$id)->delete();
        return back()->with(['deleteSuccess'=>"Products Data Are Deleted Successfully!!"]);
    }

private function requestPizzaData($request,$fileName){
    return [
        'product_name'=>$request->name,
        'image'=>$fileName,
        'price'=>$request->price,
        'publish_status'=>$request->publish,
        'category_id'=>$request->category,
        'id'=>$request->category,
        'discount_price'=>$request->discount,
        'waiting_time'=>$request->waitingTime,
        'ram'=>$request->ram,
        'battery'=>$request->battery,
        'internal_storage'=>$request->storage,
        'front_camera'=>$request->frontCamera,
        'back_camera'=>$request->backCamera,
    ];
    }
    private function reqData($request){

        $arr=[
            'product_name'=>$request->name,
            'price'=>$request->price,
            'publish_status'=>$request->publish,
            'category_id'=>$request->category,
            'discount_price'=>$request->discount,
            'waiting_time'=>$request->waitingTime,
            'ram'=>$request->ram,
            'battery'=>$request->battery,
            'internal_storage'=>$request->storage,
            'front_camera'=>$request->frontCamera,
            'back_camera'=>$request->backCamera,
        ];

         if(isset($request->image)){
           $arr['image']=$request->image;
         }
         return $arr;
    }
}
