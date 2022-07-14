<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
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

public function categoryDelete($id){
    Category::where('id',$id)->delete();
    return back()->with(['categoryDelete'=>"Categories Data are deleted successfully!"]);
    }
    public function categoryUpdate($id){
        $data=Category::where('id',$id)->first();
        return  view('Admin.category.categoryUpdate')->with(['categoryData'=>$data]);

    }
    public function categoryEdit(Request $request,$id){
        $data=[
            'category_name'=>$request->name,
        ];
        Category::where('id',$id)->update($data);
        return back()->with(['categoryEdit'=>"Category Data is updated successfully!"]);
    }

    private function getCategoryData($request){
        return [
           'category_name'=>$request->name,
        ];
    }
}
